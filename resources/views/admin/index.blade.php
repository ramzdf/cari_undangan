@extends('admin.layout.main')
@section('content')
    <div class="p-lg-3">
        <h3 class="mt-0 mb-2 font-weight-bold">List Undangan</h3>

        <hr />

        @if ($invitations->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Tema</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($invitations as $invitation)
                        <tr>
                            <th style="vertical-align: middle;" scope="row">{{ $iteration++ }}</th>
                            <td style="vertical-align: middle;">{{ $invitation->theme }}</td>
                            <td style="vertical-align: middle;">{{ $invitation->description }}</td>
                            <td style="vertical-align: middle;">
                                <div class="d-flex">
                                    <a href="/admin/invitation/{{ $invitation->id }}" type="button"
                                        class="btn btn-sm btn-primary" href=""><i class="fa-solid fa-eye"></i></a>
                                    <a href="/admin/invitation/{{ $invitation->id }}/edit" type="button"
                                        class="btn btn-sm btn-warning" href=""><i class="fa-solid fa-edit"></i></a>
                                    <form action="/admin/invitation/{{ $invitation->id }}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger btn-sm border-0"
                                            onclick="return confirm('Apakah anda yakin?')"><i
                                                class="fa-solid fa-delete-left"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div>
                {{ $invitations->links() }}
            </div>
        @else
            <h1>Undangan belum tersedia</h1>
        @endif

    @endsection
