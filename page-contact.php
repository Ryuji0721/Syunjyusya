<?php
/*
Template Name: Contact Page
*/

$success_message = '';
$error_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $inquiry_type = isset($_POST['inquiry_type']) ? sanitize_text_field($_POST['inquiry_type']) : '';
    $name = isset($_POST['your-name']) ? sanitize_text_field($_POST['your-name']) : '';
    $company = isset($_POST['company-name']) ? sanitize_text_field($_POST['company-name']) : '';
    $phone = isset($_POST['phone-number']) ? sanitize_text_field($_POST['phone-number']) : '';
    $email = isset($_POST['your-email']) ? sanitize_email($_POST['your-email']) : '';
    $message_content = isset($_POST['your-message']) ? sanitize_textarea_field($_POST['your-message']) : '';
    $response_method = isset($_POST['response_method']) ? sanitize_text_field($_POST['response_method']) : '';

    // Translation for response method
    $response_method_label = '';
    if ($response_method === 'both') $response_method_label = '電話、メールどちらでも構いません';
    elseif ($response_method === 'email') $response_method_label = 'メールを希望します';
    elseif ($response_method === 'phone') $response_method_label = '電話を希望します';

    // Basic Validation
    if (empty($name) || empty($phone) || empty($email) || empty($message_content)) {
        $error_message = '必須項目（お名前、お電話番号、メールアドレス、内容）をすべて入力してください。';
    } elseif (!is_email($email)) {
        $error_message = '有効なメールアドレスを入力してください。';
    } else {
        // Prepare Email
        $to = '24aw0115@jec.ac.jp'; // Target email
        $subject = '【お問い合わせ】' . $name . '様より';
        
        $body  = "お問い合わせがありました。\n\n";
        $body .= "【お問い合わせ内容】: " . $inquiry_type . "\n";
        $body .= "【お名前】: " . $name . "\n";
        $body .= "【会社名・組織名】: " . $company . "\n";
        $body .= "【お電話番号】: " . $phone . "\n";
        $body .= "【メールアドレス】: " . $email . "\n";
        $body .= "【返信方法】: " . $response_method_label . "\n";
        $body .= "【内容】:\n" . $message_content . "\n\n";
        $body .= "--------------------------------------------------\n";
        $body .= "送信日時: " . date_i18n('Y-m-d H:i:s') . "\n";

        $headers = array('Content-Type: text/plain; charset=UTF-8');
        $headers[] = 'From: ' . get_bloginfo('name') . ' <no-reply@' . $_SERVER['SERVER_NAME'] . '>';
        $headers[] = 'Reply-To: ' . $email;

        // Send Email
        $sent = wp_mail($to, $subject, $body, $headers);

        if ($sent) {
            $success_message = '送信しました。お問い合わせありがとうございます。';
            // Clear POST data to avoid re-submission issues (optional, typically requires redirect but simple clear here for display)
            $_POST = array(); 
        } else {
            $error_message = '送信に失敗しました。時間をおいて再度お試しいただくか、お電話にてご連絡ください。';
        }
    }
}

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

        <?php if (!empty($success_message)): ?>
            <div style="background-color: #d4edda; color: #155724; padding: 15px; margin-bottom: 20px; border: 1px solid #c3e6cb; border-radius: 4px;">
                <?php echo esc_html($success_message); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($error_message)): ?>
            <div style="background-color: #f8d7da; color: #721c24; padding: 15px; margin-bottom: 20px; border: 1px solid #f5c6cb; border-radius: 4px;">
                <?php echo esc_html($error_message); ?>
            </div>
        <?php endif; ?>

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
