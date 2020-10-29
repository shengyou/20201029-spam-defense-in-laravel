<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ContactFormTest extends DuskTestCase
{
    /**
     * @test
     * 測試填寫聯絡我們表單
     *
     * @return void
     */
    public function fillTheContactFormSuccessfully()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')

                ->type('#name', 'Spam Bot')
                ->type('#email', 'spam@spam.com')
                ->type('#message', 'Here comes the spam message!')

                ->press('送出')
                ->screenshot('fillTheContactFormSuccessfully')
                ->pause(3000)

                ->assertSee('成功');
        });
    }
}
