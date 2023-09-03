@extends('layouts.main')
@section('title', 'Technical Intern Training System')
@section('content')
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{ asset('data/slider1.jpg') }});">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <h2>
                    Technical Intern Training
                </h2>
                <ul class="thm-breadcrumb">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><span class="icon-caret"></span></li>
                    <li>
                        Katsuki Co.,Ltd
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="features-two">
        <div class="container">
            <div class="sec-title text-center">
                <h2>Technical Intern Training</h2>
            </div>
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 wow animated fadeInUp" data-wow-delay="0.1s">
                    <div class="features-two__single">
                        <div class="features-two__single-inner">
                            <div class="features-two__single-content">
                                <p style="text-align: justify; color: black;">
                                    The Technical Intern Training System (TITP) in Japan is a program designed to provide
                                    technical training and skills development to foreign workers who come to Japan to work
                                    in specific industries. The program was established to address labor shortages in
                                    various industries while allowing foreign workers to acquire technical skills and
                                    knowledge that they can use in their home countries upon returning.
                                    <br><br>
                                    Here are some key aspects of the Technical Intern Training System in Japan:
                                    <br><br>
                                    Eligibility: The program is primarily targeted at individuals from countries that have
                                    agreements with Japan for technical intern training. These individuals must meet
                                    specific criteria, including age, educational background, and language proficiency.
                                    <br><br>
                                    Industries Covered: The TITP covers a wide range of industries, including manufacturing,
                                    construction, agriculture, and healthcare. It is mainly used in industries facing labor
                                    shortages.
                                    <br><br>
                                    Duration: The duration of the training program can vary, but it typically lasts between
                                    one to five years. During this time, participants receive on-the-job training and
                                    technical instruction from Japanese employers.
                                    <br><br>
                                    Employment Conditions: Technical interns are considered trainees, not regular employees,
                                    and are subject to specific rules and regulations. Employers are responsible for
                                    providing training, appropriate wages, and a safe working environment.
                                    <br><br>
                                    Wage and Benefits: Employers are required to provide technical interns with a minimum
                                    wage and certain benefits. The specific terms of employment may vary depending on the
                                    industry and region.
                                    <br><br>
                                    Monitoring and Oversight: The program is subject to government oversight to ensure that
                                    employers are following the rules and that participants are receiving proper training
                                    and treatment. There have been concerns and reports of exploitation and abuse of foreign
                                    interns in the past, leading to efforts to improve oversight and protections.
                                    <br><br>
                                    Return to Home Country: After completing their training, participants are expected to
                                    return to their home countries, where they can apply the skills and knowledge they
                                    acquired in Japan. Some may have the opportunity to come back to Japan for further
                                    training or employment through legal channels.
                                    <br><br>
                                    Graduation System: In recent years, Japan has introduced a "graduation" system that
                                    allows technical interns to transition to regular employment in Japan after completing
                                    their training, provided they meet certain criteria.
                                    <br><br>
                                    It's important to note that the TITP has faced criticism and scrutiny, particularly
                                    regarding the working conditions and treatment of participants. Efforts have been made
                                    to improve the program's transparency and protections for foreign workers. The specifics
                                    of the program may change over time due to evolving labor needs and government policies.
                                    If you are considering participating in the Technical Intern Training System or hiring
                                    technical interns in Japan, it's advisable to consult with relevant government
                                    authorities and legal experts to ensure compliance with current regulations.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    @include('shared.job')

@endsection
