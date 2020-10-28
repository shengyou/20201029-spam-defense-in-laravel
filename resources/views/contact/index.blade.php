@extends('layouts.master')

@section('page-title', '聯絡我們')

@section('page-style')
@endsection

@section('page-script')
<!-- Contact form JavaScript -->
<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
{{--<script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>--}}
{{--<script src="{{ asset('js/contact_me.js') }}"></script>--}}
@endsection

@section('page-content')
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">聯絡我們
            <small>小編很忙，拜偷不要 SPAM 我們，穴穴你</small>
        </h1>

        @include('contact.partials.breadcrumb')

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-lg-8 mb-4">
                <h3></h3>
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="name">姓名 <span style="color: red">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            <p class="invalid-feedback" style="display: inline">Please enter your name.</p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="email">Email <span style="color: red">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" required>
                            <p class="invalid-feedback" style="display: inline">Please enter your email address.</p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="mobile">手機</label>
                            <input type="tel" class="form-control" id="mobile" name="mobile">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label for="message">建議與問題 <span style="color: red">*</span></label>
                            <textarea rows="10" cols="100" class="form-control" id="message" name="message" required
                                      maxlength="999" style="resize:none"></textarea>
                            <p class="invalid-feedback" style="display: inline">Please enter your message.</p>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">
                        送出
                    </button>
                </form>
            </div>
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <h3>聯絡資訊</h3>
                <p>
                    3481 Melrose Place
                    <br>Beverly Hills, CA 90210
                    <br>
                </p>
                <p>
                    <abbr title="Phone">P</abbr>: (123) 456-7890
                </p>
                <p>
                    <abbr title="Email">E</abbr>:
                    <a href="mailto:name@example.com">name@example.com
                    </a>
                </p>
                <p>
                    <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
                </p>
            </div>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
