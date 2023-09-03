@extends('layouts.main')
@section('content')
    <section class="breadcum-area breadcum-bg breadcum-bg2 section-padding"
        style="background-image:url({{ asset('data/class_room/2.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcum-title">
                        <h2 class="page-title">Technical Trainee</h2>
                        <ul class="page-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a> /
                                <span>Technical Trainee</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-who" style="padding: 0px; padding-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                外国人技能実習制度とは
                            </h4>
                        </center>
                    </div>
                    <div class="who-are-content">
                        <p>
                            外国人技能実習制度は、我が国が先進国としての役割を果たしつつ国際社会との調和ある発展を図っていくため、技能、技術又は知識の開発途上国等への移転を図り、開発途上国等の経済発展を担う「人づくり」に協力することを目的としております。（厚生労働省）　具体的には、３年～５年の期間において、外国人技能実習生が日本の事業者と雇用関係の下、日本の産業、職業上の技能等の習得をする制度です。
                        </p>
                    </div>


                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                受け入れ可能職種
                            </h4>
                        </center>
                    </div>
                    <div class="who-are-content">
                        <p>
                            農業、漁礁、建設、食品製造、繊維・衣服、機械・金属、家具製作、印刷、製本、プラスチック成形、強化プラスチック成形、塗装、工業包装、紙器・段ボール箱製造、ビルクリーニングなど（総計75職種・135作業
                            職種について詳細はこちら
                        </p>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <img src="{{ asset('data/tech1.png') }}" alt=""
                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center py-5">
                <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <img src="{{ asset('data/tech2.jpg') }}" alt=""
                                    style="width: 100%; height: 200px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                受け入れ可能な人数
                            </h4>
                        </center>
                    </div>
                    <div class="who-are-content">
                        <table
                            style="box-sizing: inherit; padding: 0px; margin: 0px 0px 1.5em; border-spacing: 0px; width: 750px; color: rgb(46, 39, 81); font-family: Poppins, sans-serif; font-size: 15px;">
                            <tbody style="box-sizing: inherit; padding: 0px; margin: 0px;">
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px; background-color: rgb(244, 109, 40); color: black;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 実習実施者の常勤の職員の総数</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; background-color: rgb(244, 173, 80); color: black; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 「技能実習生1号」の人数</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 301人以上</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 常勤職員総数の　20分の1</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 201人以上　300人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 15人</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 101人以上　200人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 10人</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 51人以上　100人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 6人</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 41人以上　50人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 5人</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 31人以上　40人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 4人</th>
                                </tr>
                                <tr style="box-sizing: inherit; padding: 0px; margin: 0px; font-weight: bold;">
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px; height: 10px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 30人以下</th>
                                    <th
                                        style="box-sizing: inherit; padding: 0px; margin: 0px; text-align: left; border: 1px solid rgb(36, 37, 122); width: 800px;">
                                        &nbsp;&nbsp;&nbsp;&nbsp; 3人</th>
                                </tr>
                            </tbody>
                        </table>
                        <p>
                            ※ 常勤職員数については、受入れている技能実習生は含まれません。
                            <br>
                            ※ 特有の事情のある職種（介護職種等）については、事業所管大臣が定める告示で定められる人数になります。
                        </p>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12">
                    <div class="section-title">
                        <center>
                            <h4 class="s-title">
                                特定技能実習度とは
                            </h4>
                        </center>
                    </div>
                    <div class="who-are-content">
                        <p>
                            中小・小規模事業者をはじめとした深刻化する人手不足に対応するため、生産性向上や国内人材の確保のための取組を行ってもなお人材を確保することが困難な状況にある産業上の分野において、一定の専門性・技能を有し即戦力となる外国人を受け入れていくものです。(JITCO)単純労働を含む業種に外国人を受け入れる新しい在留資格「特定技能1号」と「特定技能2号」が、2019年4月1日より施行されました。
                        </p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <img src="{{ asset('data/tech3.jpg') }}" alt=""
                                    style="width: 100%; height: 220px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                    <div class="product-cart-wrap">
                        <div class="product-img-action-wrap">
                            <div class="product-img product-img-zoom">
                                <img src="{{ asset('data/tech4.jpg') }}" alt=""
                                    style="width: 100%; height: 220px; background-size: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row justify-content-center py-5">

                <div class="col-md-6 col-12">
                    <div class="small-list-feature ">
                        <h4 class="s-title">&gt;対象国・対象者</h4>
                        <p><i>ミャンマー、カンボジア、タイ、ベトナム、中国、フィリピン、インドネシア</i></p>
                        <br>
                        <h4 class="s-title">&gt;取得方法：</h4>
                        <p><i>※日本語力テスト+就業分野の技能・知識テスト(各国にて実施) ※もしくは「技能実習2号」修了者</i></p>
                        <br>
                        <h4 class="s-title">受け入れ可能職種</h4>

                        <table>
                            <tbody>
                                <tr>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 介護 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> ビルクリーニング <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 素形材産業 <b></b></b></td>
                                </tr>

                                <tr>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 産業機械製造業 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 電気・電子情報関連産業 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 建設 <b></b></b></td>
                                </tr>

                                <tr>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 自動車整備 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 航空 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 宿泊 <b></b></b></td>
                                </tr>

                                <tr>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 農業 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 漁業 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 飲食料品製造業 <b></b></b></td>
                                </tr>

                                <tr>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 外食業 <b></b></b></td>
                                    <td> <b><i class="fa fa-angle-double-right"></i> 造船・舶用工業 <b></b></b></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6 col-12">
                    <img src="{{ asset('data/tech5.png') }}" alt="#" style="width: 550px; height: 400px;">
                </div>
            </div>



            <div class="row justify-content-center py-5">
                <div class="col-md-12 col-12">
                    <center>
                        <h4 class="s-title">
                            エンジニア（外国人技術者）
                        </h4>
                    </center>

                </div>

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <img src="{{ asset('data/tech6.jpg') }}" alt="">
                </div>
            </div>




            <div class="row justify-content-center py-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <table class="table table-hover ">
                        <tbody>

                            <tr class="table-active">
                                <th style="background-color: #94bee4; color: black; width: 200px;border: 1px solid black;">
                                    <br><br></th>
                                <th
                                    style="background-color:#94bee4; color: black; font-size:12px; border: 1px solid black;">
                                    外国人技術者 技術・人文・国際業務）</th>
                                <th
                                    style="background-color: #94bee4; color: black; font-size:12px; border: 1px solid black;">
                                    技能 実習生</th>
                            </tr>

                            <tr class="table-active">
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    <br>ビザの種類</th>
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    就労ビザ</th>
                                <th
                                    style="background-color:  #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    トレーニングビザ</th>
                            </tr>

                            <tr class="table-active">
                                <th
                                    style="background-color:  #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    目的</th>
                                <th
                                    style="background-color:  #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    特定の分野において、技能や知識、あるいは経験をもった海外人材に、日本で就労し、能力を発揮してもらい、活躍してもらうこと</th>
                                <th
                                    style="background-color:  #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    特定の分野において、日本の高度な技術を一定期間終了・習得に、帰国後、習得した技術を自国の経済産業発展に役立てること（技術移転）</th>
                            </tr>


                            <tr class="table-active">
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    ビザ要件</th>
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    ■日本で行う業務内容と現地卒業学部、もしくは現地就業経験に深い関連があること
                                </th>
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    ■現地にて、150時間以上の日本語教育を受けること
                                    ■日本国内にて管理団体（組合など）が入国および滞在時の管理を行うこと
                                    ■学歴は問わない</th>
                            </tr>


                            <tr class="table-active">
                                <th
                                    style="background-color: #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    就労期間</th>
                                <th
                                    style="background-color: #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    無期限（ただし原則1、3、5年などのビザの期間ごとに更新</th>
                                <th
                                    style="background-color: #94bee4; color: black; font-size:12px;border: 1px solid black;">
                                    原則3年 (※2017年11月に改訂)
                                    （一部業種については、3年目に基準をクリアすると2年延長可能）</th>
                            </tr>

                            <tr class="table-active">
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    分野</th>
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    CAD、IT関連、エンジニアリング、貿易、通訳など</th>
                                <th
                                    style="background-color: #fafafa; color: black;font-size:12px;border: 1px solid black;">
                                    農業、漁業、建設、工場（板金、電気、塗装、繊維、食品加工）、介護（2017年11月）など128分野</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection
