<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AkismetDefenseTest extends DuskTestCase
{
    /**
     * @test
     * 測試 Akismet 是否能擋下
     *
     * @return void
     */
    public function preventSpamUsingAkismet()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/contact')
                ->type('name', '40RYP89FB7')
                ->type('email', 'info@domainworld.com')
                ->type('message', 'IMPORTANCE NOTICE Notice#: 491343 Date: 2020-10-23 Expiration message of your kotlin.tips EXPIRATION NOTIFICATION CLICK HERE FOR SECURE ONLINE PAYMENT: http://sdjnbvel.xyz/?n=kotlin.tips&r=a&t=1603378624&p=v1 This purchase expiration notification kotlin.tips advises you about the submission expiration of domain kotlin.tips for your e-book submission. The information in this purchase expiration notification kotlin.tips may contains CONFIDENTIAL AND/OR LEGALLY PRIVILEGED INFORMATION from the processing department from the processing department to purchase our e-book submission. NON-COMPLETION of your submission by the given expiration date may result in CANCELLATION of the purchase. CLICK HERE FOR SECURE ONLINE PAYMENT: http://sdjnbvel.xyz/?n=kotlin.tips&r=a&t=1603378624&p=v1 ACT IMMEDIATELY. The submission notification kotlin.tips for your e-book will EXPIRE WITHIN 2 DAYS after reception of this email This notification is intended only for the use of the individual(s) having received this message. PLEASE CLICK ON SECURE ONLINE PAYMENT TO COMPLETE YOUR PAYMENT SECURE ONLINE PAYMENT: http://sdjnbvel.xyz/?n=kotlin.tips&r=a&t=1603378624&p=v1 Non-completion of your submission by given expiration date may result in cancellation. All online services will be restored automatically upon confirmation of payment. Delivery will be completed within 24 hours. CLICK UNDERNEATH FOR IMMEDIATE PAYMENT: SECURE ONLINE PAYMENT: http://sdjnbvel.xyz/?n=kotlin.tips&r=a&t=1603378624&p=v1')

                ->pause(1000)
                ->press('送出')
                ->screenshot('preventSpamUsingAkismet')
                ->pause(3000)

                ->assertSee('please try later again');
        });
    }
}
