<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PagesTest extends DuskTestCase
{
    /**
     * @test
     * 測試首頁
     *
     * @return void
     */
    public function checkHomePageIsOK()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('歡迎來到');
        });
    }

    /**
     * @test
     * 測試聯絡我們頁
     *
     * @return void
     */
    public function checkContactPageIsOK()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->assertSee('聯絡資訊');
        });
    }
}
