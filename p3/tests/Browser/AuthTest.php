<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AuthTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testLogin()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('@login-email', 'jill@harvard.edu')
                    ->type('@login-password', 'asdfasdf')
                    ->click('@login-button')
                    ->assertSee('Customer Name');
        });
    }

    public function testAddProject()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/nassau-medical-center')
            ->type('@project-name', 'test project')
            ->type('@begin-date', '05/01/2021')
            ->type('@end-date', '05/03/2021')
            ->type('@project-email', 'asb@abs.com')
            ->click('@project-button')
            ->assertSee('equipment sale');
        });
    }

    public function testUpdateProject()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/projects')
                    ->click('@project-1')
                    ->clear('@project-complete-pct')
                    ->type('@project-complete-pct', '100')
                    ->click('@update-button')
                    ->visit('projects')
                    ->click('@project-1')
                    ->assertInputValue('@project-complete-pct', '100');
        });
    }

    public function testDeleteProject()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/projects')
                    ->click('@project-1')
                    ->click('@delete-button')
                    ->visit('/projects')
                    ->assertDontSee('dispenser install');
        });
    }

    public function testLogout()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->click('@logout-button')
                    ->assertSee('Login');
        });
    }
}