<?php

namespace App\Http\Controllers;

class ProfileController extends Controller
{
    // Find one member's data by the URL slug, or show a 404 page.
    private function member(string $slug): array
    {
        $members = config('members');
        abort_unless(isset($members[$slug]), 404);

        return $members[$slug] + ['slug' => $slug];
    }

    // Main page: lists all group members
    public function main()
    {
        return view('main', ['members' => config('members')]);
    }

    // Member's Home page
    public function home(string $member)
    {
        return view('home', ['member' => $this->member($member)]);
    }

    // Member's About Me page
    public function about(string $member)
    {
        return view('about', ['member' => $this->member($member)]);
    }

    // Member's Contact page
    public function contact(string $member)
    {
        return view('contact', ['member' => $this->member($member)]);
    }
}
