<?php

namespace App\Helpers;

use Sastrawi\Stemmer\StemmerFactory;

class CosineSimilarity
{
    private $stemmer;

    public function __construct()
    {
        $stemmerFactory = new StemmerFactory();
        $this->stemmer = $stemmerFactory->createStemmer();
    }

    public function calculateSimilarities($query, $documents)
    {
        $similarities = [];

        foreach ($documents as $document) {
            $similarity = $this->calculateSimilarity($query, $document->description);
            $similarities[] = [
                'document' => $document,
                'similarity' => $similarity
            ];
        }

        return $similarities;
    }

    public function calculateSimilarity($query, $document)
    {
        // Preprocess the query and document
        $query = $this->preprocessText($query);
        $document = $this->preprocessText($document);

        // Tokenize and stem the query and document
        $queryTokens = $this->tokenizeAndStem($query);
        $documentTokens = $this->tokenizeAndStem($document);

        // Calculate term frequencies
        $queryTermFreq = $this->calculateTermFrequency($queryTokens);
        $documentTermFreq = $this->calculateTermFrequency($documentTokens);

        // Calculate dot product
        $dotProduct = 0;
        foreach ($queryTermFreq as $term => $freq) {
            if (isset($documentTermFreq[$term])) {
                $dotProduct += $freq * $documentTermFreq[$term];
            }
        }

        // Calculate magnitudes
        $queryMagnitude = $this->calculateMagnitude($queryTermFreq);
        $documentMagnitude = $this->calculateMagnitude($documentTermFreq);

        // Calculate cosine similarity
        if ($queryMagnitude * $documentMagnitude == 0) {
            return 0;
        }

        $cosineSimilarity = $dotProduct / ($queryMagnitude * $documentMagnitude);

        return $cosineSimilarity;
    }

    private function preprocessText($text)
    {
        // Mengubah teks menjadi huruf kecil
        $text = strtolower($text);
         // Menghapus semua karakter non-alfanumerik (termasuk tanda baca)
        $text = preg_replace("/[^\w\s]/", "", $text);
        $stopwords = [
            'yang', 'untuk', 'pada', 'ke', 'para', 'namun', 'menurut', 'antara', 'dia', 'dua',
            'ia', 'seperti', 'jika', 'sehingga', 'kembali', 'dan', 'tidak', 'ini', 'karena',
            'kepada', 'oleh', 'saat', 'harus', 'sementara', 'setelah', 'belum', 'kami', 'sekitar',
            'bagi', 'serta', 'di', 'dari', 'telah', 'sebagai', 'masih', 'hal', 'ketika', 'adalah',
            'itu', 'dalam', 'bisa', 'bahwa', 'atau', 'hanya', 'kita', 'dengan', 'akan', 'juga',
            'ada', 'mereka', 'sudah', 'saya', 'terhadap', 'secara', 'agar', 'lain', 'anda',
            'begitu', 'mengapa', 'kenapa', 'yaitu', 'yakni', 'daripada', 'itulah', 'lagi', 'maka',
            'tentang', 'demi', 'dimana', 'kemana', 'pula', 'sambil', 'sebelum', 'sesudah', 'supaya',
            'guna', 'kah', 'pun', 'sampai', 'sedang', 'selagi', 'sementara', 'tetapi', 'apakah',
            'kecuali', 'sebab', 'selain', 'seolah', 'seraya', 'terus', 'tanpa', 'agak', 'boleh',
            'dapat', 'dsb', 'dst', 'dll', 'dahulu', 'dulunya', 'anu', 'demikian', 'tapi', 'ingin',
            'juga', 'nggak', 'mari', 'nanti', 'melainkan', 'oh', 'ok', 'seharusnya', 'sebetulnya',
            'setiap', 'setidaknya', 'sesuatu', 'pasti', 'saja', 'toh', 'ya', 'walau', 'tolong',
            'tentu', 'amat', 'apalagi', 'bagaimanapun', 'nih', 'aku', 'kok', 'di', 'dan', 'atau',
            'tolong', 'kan', 'itu', 'sini', 'agar', 'ini', 'mati', 'nih', 'dong', 'ada', 'apa', 'adalah',
            'sudah', 'untuk', 'dengan', 'kurang', 'jadi', 'maka', 'kapan', 'dimana', 'siapa', 'akan', 'dengan', 'supaya', 'jadinya', 'deh', 'yang'
        ];
        $textWords = explode(" ", $text);
        $filteredWords = array_filter($textWords, function ($word) use ($stopwords) {
            return !in_array($word, $stopwords);
        });

        return implode(" ", $filteredWords);
    }

    private function tokenizeAndStem($text)
    {
        $tokens = explode(" ", $text);
        return array_map([$this->stemmer, 'stem'], $tokens);
    }

    private function calculateTermFrequency($tokens)
    {
        $termFrequency = [];
        foreach ($tokens as $token) {
            if (isset($termFrequency[$token])) {
                $termFrequency[$token]++;
            } else {
                $termFrequency[$token] = 1;
            }
        }
        return $termFrequency;
    }

    private function calculateMagnitude($termFreq)
    {
        $sumOfSquares = 0;
        foreach ($termFreq as $freq) {
            $sumOfSquares += $freq * $freq;
        }
        return sqrt($sumOfSquares);
    }
}
