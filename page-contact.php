<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main class="page-contact">
    <!-- Page Header -->
    <div class="page-header">
        <h1 class="page-title-ja">お問い合わせ</h1>
    </div>

    <div class="contact-container">
        <p class="contact-intro">
            お問い合わせありがとうございます。<br>
            ご返信までに３〜４営業日いただいております。<br>
            あらかじめご了承ください。<br>
            （*は必須項目です。）
        </p>

        <form action="" method="post" class="contact-form">
            
            <div class="form-group">
                <label class="form-label">お問い合わせ内容</label>
                <div class="radio-group-vertical">
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="その他"> その他</label>
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="求人応募"> 求人応募</label>
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="お問い合わせ"> お問い合わせ</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お名前 <span class="required">*</span></label>
                <input type="text" name="your-name" class="form-control" placeholder="text">
            </div>

            <div class="form-group">
                <label class="form-label">会社名・組織名</label>
                <input type="text" name="company-name" class="form-control" placeholder="text">
            </div>

            <div class="form-group">
                <label class="form-label">お電話番号 <span class="required">*</span></label>
                <input type="tel" name="phone-number" class="form-control" placeholder="text">
            </div>

            <div class="form-group">
                <label class="form-label">メールアドレス <span class="required">*</span></label>
                <input type="email" name="your-email" class="form-control" placeholder="text">
            </div>

            <div class="form-group">
                <label class="form-label">内容 <span class="required">*</span><br><span class="label-note">（できるだけ詳細に記載願います）</span></label>
                <textarea name="your-message" class="form-control" rows="8" placeholder="text"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">返信方法について</label>
                <div class="radio-group-vertical">
                    <label class="radio-label"><input type="radio" name="response_method" value="both"> 電話、メールどちらでも構いません</label>
                    <label class="radio-label"><input type="radio" name="response_method" value="email"> メールを希望します</label>
                    <label class="radio-label"><input type="radio" name="response_method" value="phone"> 電話を希望します</label>
                </div>
            </div>

            <div class="submit-wrapper">
                <button type="submit" class="submit-btn">送信</button>
            </div>

        </form>
    </div>
</main>

<?php get_footer(); ?>
