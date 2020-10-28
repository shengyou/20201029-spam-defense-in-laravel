<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class HonypotDefenseTest extends DuskTestCase
{
    /**
     * @test
     * 填表單填得太快會被擋下來
     *
     * @return void
     */
    public function preventSpamWhenFillTheFormTooFast()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')

                ->type('#name', 'Spam Bot')
                ->type('#email', 'spam@spam.com')
                ->type('#message', 'Here comes the spam message!')

                ->press('送出')
                ->screenshot('preventSpamWhenFillTheFormTooFast')
                ->pause(3000)

                ->assertSee('Hey, YOU!');
        });
    }

    /**
     * @test
     * 填表單填慢一點
     *
     * @return void
     */
    public function passTheHoneyPotIfTypeSlowly()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')

                ->typeSlowly('#name', 'Spam Bot')
                ->pause(1500)
                ->typeSlowly('#email', 'spam@spam.com')
                ->pause(1500)
                ->typeSlowly('#message', 'Here comes the spam message!')
                ->pause(1500)

                ->press('送出')
                ->screenshot('passTheHoneyPotIfTypeSlowly')
                ->pause(3000)

                ->assertSee('成功送出');
        });
    }
}
