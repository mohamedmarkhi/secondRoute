<?php
    public function() {
        $name = "Mohamed";
        return view('Home', compact('name'));

        <h1>Hello {{ $name }}</h1>
        {{!! $name }}
    }
?>