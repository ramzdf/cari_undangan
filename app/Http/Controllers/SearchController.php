<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Helpers\CosineSimilarity;
use App\Models\Asistant;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $queryDescription = $request->input('search');

        // Membuat instance dari CosineSimilarity
        $cosineSimilarity = new CosineSimilarity();

        // Mengambil semua data asisten dari database
        $asistants = DB::table('invitations')->get();

        // Menghitung kemiripan semua deskripsi
        $similarities = $cosineSimilarity->calculateSimilarities($queryDescription, $asistants);

        // Mengurutkan hasil berdasarkan nilai kemiripan
        usort($similarities, function ($a, $b) {
            return $b['similarity'] <=> $a['similarity'];
        });

        //jika similaritynya 0 maka jangan ditampilkan
        $similarities = array_filter($similarities, function ($similarity) {
            return $similarity['similarity'] > 0;
        });

        // Mengirim hasil ke view (atau kembalikan sebagai JSON)
        return view('result', ['results' => $similarities, 'search' => $queryDescription]);
    }
}
