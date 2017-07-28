<?php
/**
 ** Template Name: contact
 **/
 get_header(); ?>
        <div class="wraper">
            <div class="areaAbout">
                <h1 class="logoHeaderMb is_mb"><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt=""></a></h1> </div>
            <!-- /areaAbout -->
            <form action="" method="post" id="formContact" enctype="multipart/form-data">
                <div class="areaContact">
                    <div class="blockTitle">
                        <h2 class="titleSection">お問い合わせフォーム</h2>
                        <div class="areaText01 effect clearfix">
							<div class="contactIntroL">
                            <p>「こんなこと聞いてもいいのかな・・・」<br>
							いえ、大事なことかもしれません！<br>なんでもお気軽にお問い合わせください。</p>
							<!--</div>-->
							<!--<div class="contactIntroR">-->
							<img src="<?php echo get_template_directory_uri(); ?>/images/img_contact_ill01.jpg">
							</div>

                        </div>
                    </div>
                    <!--form-->
                    <div class="formBox">
                        <table class="tableFormBox">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>お名前 <span class="note1">（代表者）</span></p>
                                    </td>
                                    <td class="check"><input type="text" name="cms-name" placeholder="例：資格　太郎"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>お名前 <span class="note1">（カナ）</span></p>
                                    </td>
                                    <td class="must"><input type="text" name="cms-kana" placeholder="例：シカク　タロウ"></td>
                                </tr>
								<tr>
                                    <td>
                                        <p>屋号または社名</p>
                                    </td>
                                    <td class="must"><input type="text" name="cms-org" placeholder="例：株式会社 シカク"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="areaContact">
                    <div class="formBox">
                        <table class="tableFormBox">
                            <tbody>
                                <tr>
                                    <td>
                                        <p>メールアドレス</p>
                                    </td>
                                    <td class="must"><input type="text" name="cms-mail" placeholder="例：yuko@horys.net"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><span class="note1">ご連絡先</span><br>お電話番号</p>
                                    </td>
                                    <td class="must"><input type="text" name="cms-mobile" placeholder="例：0312345678　　※ハイフンなし。固定電話でも携帯でもOK。"></td>
                                </tr>
                                <tr class="twoCol">
                                    <td>
                                        <p>郵便番号</p>
                                    </td>
                                    <td> <input type="text" name="" placeholder="例：0000000　※ハイフンなし"> <span class="note2">住所自動入力</span> </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>住所</p>
                                    </td>
                                    <td><input type="text" name="" placeholder="「住所自動入力」のボタンを押してご入力ください。"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>番地</p>
                                    </td>
                                    <td><input type="text" name="cms-addr" placeholder=""></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>ビル・マンション名 </p>
                                    </td>
                                    <td><input type="text" name="" placeholder="例：〇〇〇ビル　0000号"></td>
                                </tr>
                                <tr>
                                    <td class="pd_t_40">
                                        <p>ご希望のご連絡方法</p>
                                    </td>
                                    <td class="pd_t_40"> <select class="" name="">
                                        <option value="">特になし</option>
										<option value="">メール</option>
										<option value="">電話</option>
										<option value="">FAX</option>
                                    </select> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="areaContact mgr_b_110">
                    <div class="formBox">
                        <table class="tableFormBox">
                            <tbody>
                                <tr>
                                    <td class="vTop">お問い合わせ内容</td>
                                    <td class="must top"> <textarea name="cms-inquirybody" placeholder="例：１人でやってますが許可取れますか？
例：財務諸表の書き方が分からない・・。
例：いったいなんの書類が必要でしょうか？・・・
等々"></textarea> </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="three_div submitContact">
                            <!-- <button type="submit" class="btnNoname btnMain">確認ページへ</button> -->
                            <a class="btnMain" href="javascript:void()" onclick="document.getElementById('formContact').submit();">確認する</a>
                        </div>
                    </div>
                </div>
            </form>
            <!--form-->
        </div>
        <!-- /areaListAbout -->
    </div>
    <!-- /wraper -->
    </div>
<?php get_footer(); ?>
