<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invitations = Invitation::paginate(8);
        $iteration = $invitations->firstItem();
        return view('admin.invitation.index', compact('invitations', 'iteration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.invitation.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'theme' => 'required|unique:invitations',
            'description' => 'required',
            'image_theme' => 'mimes:png,jpeg,jpg|max:2048',
        ], [
            'theme.required' => 'Tema harus diisi',
            'theme.unique' => 'Tema sudah ada',
            'description.required' => 'Deskripsi harus diisi',
            'image_theme.mimes' => 'Foto harus berupa file: png, jpeg, jpg',
            'image_theme.max' => 'Ukuran foto maksimal 2MB',
        ]);


        $invitation = new Invitation();
        $invitation->theme = $request->get('theme');
        $invitation->description = $request->get('description');

        if ($request->hasFile('image_theme')) {
            $PhotoName = time() . '.' . $request->image_theme->extension();
            $path = $request->file('image_theme')->storeAs('themes', $PhotoName, 'public');
            $invitation->image_theme = $PhotoName;
        }

        $invitation->save();

        return redirect('/admin/invitation')->with('success', 'Data baru telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function show(Invitation $invitation)
    {
        return view('admin.invitation.show', compact('invitation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function edit(Invitation $invitation)
    {
        return view('admin.invitation.edit', compact('invitation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invitation $invitation)
    {
        $request->validate(
            [
                'theme' => 'required|unique:invitations,theme,' . $invitation->id,
                'description' => 'required',
                'image_theme_new' => 'mimes:png,jpeg,jpg|max:2048',
            ],
            [
                'theme.required' => 'Tema harus diisi',
                'theme.unique' => 'Tema sudah ada',
                'description.required' => 'Deskripsi harus diisi',
                'image_theme_new.mimes' => 'Foto harus berupa file: png, jpeg, jpg',
                'image_theme_new.max' => 'Ukuran foto maksimal 2MB',
            ]
        );

        $invitation->theme = $request->get('theme');
        $invitation->description = $request->get('description');

        if ($request->hasFile('image_theme_new')) {
            if ($invitation->image_theme !== null) {
                unlink(storage_path('app/public/themes/' . $invitation->image_theme));
            }
            $PhotoName = time() . '.' . $request->image_theme_new->extension();
            $path = $request->file('image_theme_new')->storeAs('themes', $PhotoName, 'public');
            $invitation->image_theme = $PhotoName;
        }

        $invitation->save();

        return redirect('/admin/invitation')->with('success', 'Data telah diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invitation  $invitation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invitation $invitation)
    {
        if ($invitation->image_theme !== null) {
            unlink(storage_path('app/public/themes/' . $invitation->image_theme));
        }
        $invitation->delete();
        return redirect('/admin/invitation')->with('success', 'Data telah dihapus');
    }
}
