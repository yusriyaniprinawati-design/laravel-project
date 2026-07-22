<?php

use Illuminate\Support\Facades\DB;

$id = request('id');

if ($id) {
    DB::table('pendaftaran')
        ->where('id', $id)
        ->delete();
}

header("Location: /uas");
exit;