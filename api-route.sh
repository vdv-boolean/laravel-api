#! /usr/bin/bash

echo "Route::get($1\s, [$1\Controller::class, 'index'])->name(api.$1\s.index)"
