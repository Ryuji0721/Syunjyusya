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

    // Validation
    $validation_errors = array();

    // お問い合わせ内容 - 必須
    if (empty($inquiry_type)) {
        $validation_errors[] = '※お問い合わせ内容を選択してください。';
    }

    // お名前 - 必須、日本語またはアルファベットのみ
    if (empty($name)) {
        $validation_errors[] = '※お名前を入力してください。';
    } elseif (!preg_match('/^[\p{Han}\p{Hiragana}\p{Katakana}ａ-ｚＡ-Ｚa-zA-Z\s\-\u3000]+$/u', $name)) {
        $validation_errors[] = '※お名前は日本語またはアルファベットで入力してください。';
    }

    // お電話番号 - 必須、数字のみ
    if (empty($phone)) {
        $validation_errors[] = '※お電話番号を入力してください。';
    } elseif (!preg_match('/^[0-9]+$/', $phone)) {
        $validation_errors[] = '※お電話番号は数字で入力してください。';
    } elseif (strlen($phone) < 10 || strlen($phone) > 11) {
        $validation_errors[] = '※お電話番号は10〜11桁で入力してください。';
    }

    // メールアドレス - 必須、有効なメール形式
    if (empty($email)) {
        $validation_errors[] = '※メールアドレスを入力してください。';
    } elseif (!is_email($email)) {
        $validation_errors[] = '※有効なメールアドレスを入力してください。';
    }

    // 内容 - 必須、1文字以上
    if (empty($message_content)) {
        $validation_errors[] = '※内容を入力してください。';
    }

    if (!empty($validation_errors)) {
        $error_message = implode('<br>', $validation_errors);
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.querySelector('.contact-form');
    if (!contactForm) return;

    // 各フィールドにリアルタイムバリデーションを設定
    const inquiryRadios = contactForm.querySelectorAll('input[name="inquiry_type"]');
    const nameInput = contactForm.querySelector('input[name="your-name"]');
    const phoneInput = contactForm.querySelector('input[name="phone-number"]');
    const emailInput = contactForm.querySelector('input[name="your-email"]');
    const messageInput = contactForm.querySelector('textarea[name="your-message"]');
    const companyInput = contactForm.querySelector('input[name="company-name"]');

    // 各フィールドの検証状態を管理するオブジェクト
    const fieldStates = {
        'inquiry_type': { touched: false },
        'your-name': { touched: false },
        'phone-number': { touched: false },
        'your-email': { touched: false },
        'your-message': { touched: false },
        'company-name': { touched: false }
    };

    // お問い合わせ内容のバリデーション
    inquiryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            fieldStates['inquiry_type'].touched = true;
            validateField('inquiry_type');
        });
    });

    // お名前のバリデーション
    nameInput.addEventListener('blur', function() {
        fieldStates['your-name'].touched = true;
        validateField('your-name');
    });
    nameInput.addEventListener('input', function() {
        if (fieldStates['your-name'].touched) {
            validateField('your-name');
        }
    });

    // お電話番号のバリデーション
    phoneInput.addEventListener('blur', function() {
        fieldStates['phone-number'].touched = true;
        validateField('phone-number');
    });
    phoneInput.addEventListener('input', function() {
        // 数字のみを抽出
        let digits = this.value.replace(/[^0-9]/g, '');
        
        // 自動フォーマット
        this.value = formatPhoneNumber(digits);
        
        if (fieldStates['phone-number'].touched) {
            validateField('phone-number');
        }
    });

    // メールアドレスのバリデーション
    emailInput.addEventListener('blur', function() {
        fieldStates['your-email'].touched = true;
        validateField('your-email');
    });
    emailInput.addEventListener('input', function() {
        if (fieldStates['your-email'].touched) {
            validateField('your-email');
        }
    });

    // 内容のバリデーション
    messageInput.addEventListener('blur', function() {
        fieldStates['your-message'].touched = true;
        validateField('your-message');
    });
    messageInput.addEventListener('input', function() {
        if (fieldStates['your-message'].touched) {
            validateField('your-message');
        }
    });

    // Form submission validation
    contactForm.addEventListener('submit', function(e) {
        const errors = validateForm();
        if (errors.length > 0) {
            e.preventDefault();
            displayErrors(errors);
            scrollToTop();
        }
    });

    function validateField(fieldName) {
        const errors = [];

        if (fieldName === 'inquiry_type') {
            const inquiryType = document.querySelector('input[name="inquiry_type"]:checked');
            if (!inquiryType) {
                errors.push('※お問い合わせ内容を選択してください。');
            }
        }

        if (fieldName === 'your-name') {
            const name = nameInput.value.trim();
            if (!name) {
                errors.push('※お名前を入力してください。');
            } else if (!isValidName(name)) {
                errors.push('※お名前は日本語またはアルファベットで入力してください。');
            }
        }

        if (fieldName === 'phone-number') {
            const phone = phoneInput.value.trim();
            if (!phone) {
                errors.push('※お電話番号を入力してください。');
            } else if (!isValidPhone(phone)) {
                errors.push('※お電話番号は数字で入力してください。');
            } else if (phone.replace(/[^0-9]/g, '').length < 10 || phone.replace(/[^0-9]/g, '').length > 11) {
                errors.push('※お電話番号は10〜11桁で入力してください。');
            }
        }

        if (fieldName === 'your-email') {
            const email = emailInput.value.trim();
            if (!email) {
                errors.push('※メールアドレスを入力してください。');
            } else if (!isValidEmail(email)) {
                errors.push('※有効なメールアドレスを入力してください。');
            }
        }

        if (fieldName === 'your-message') {
            const message = messageInput.value.trim();
            if (!message) {
                errors.push('※内容を入力してください。');
            }
        }

        displayFieldError(fieldName, errors);
    }

    function displayFieldError(fieldName, errors) {
        // 既存のエラーメッセージを削除
        const existingError = document.querySelector(`[data-error-for="${fieldName}"]`);
        if (existingError) {
            existingError.remove();
        }

        // エラーがあれば表示、なければ削除（既に上で削除されているので念のため確認）
        if (errors.length > 0) {
            const errorDiv = document.createElement('div');
            errorDiv.setAttribute('data-error-for', fieldName);
            errorDiv.style.backgroundColor = '#f8d7da';
            errorDiv.style.color = '#721c24';
            errorDiv.style.padding = '10px';
            errorDiv.style.marginTop = '5px';
            errorDiv.style.marginBottom = '10px';
            errorDiv.style.border = '1px solid #f5c6cb';
            errorDiv.style.borderRadius = '4px';
            errorDiv.style.fontSize = '0.9em';
            errorDiv.innerHTML = errors.join('<br>');

            // フィールドの後に挿入
            let targetField;
            if (fieldName === 'inquiry_type') {
                targetField = contactForm.querySelector('.radio-group-vertical');
            } else {
                targetField = contactForm.querySelector(`input[name="${fieldName}"], textarea[name="${fieldName}"]`);
            }

            if (targetField) {
                targetField.parentElement.insertBefore(errorDiv, targetField.nextSibling);
            }
        }
    }

    function validateForm() {
        const errors = [];

        // お問い合わせ内容 - 必須
        const inquiryType = document.querySelector('input[name="inquiry_type"]:checked');
        if (!inquiryType) {
            errors.push('※お問い合わせ内容を選択してください。');
        }

        // お名前 - 必須、日本語またはアルファベットのみ
        const name = nameInput.value.trim();
        if (!name) {
            errors.push('※お名前を入力してください。');
        } else if (!isValidName(name)) {
            errors.push('※お名前は日本語またはアルファベットで入力してください。');
        }

        // お電話番号 - 必須、数字のみ
        const phone = phoneInput.value.trim();
        if (!phone) {
            errors.push('※お電話番号を入力してください。');
        } else if (!isValidPhone(phone)) {
            errors.push('※お電話番号は数字で入力してください。');
        } else if (phone.replace(/[^0-9]/g, '').length < 10 || phone.replace(/[^0-9]/g, '').length > 11) {
            errors.push('※お電話番号は10〜11桁で入力してください。');
        }

        // メールアドレス - 必須、有効なメール形式
        const email = emailInput.value.trim();
        if (!email) {
            errors.push('※メールアドレスを入力してください。');
        } else if (!isValidEmail(email)) {
            errors.push('※有効なメールアドレスを入力してください。');
        }

        // 内容 - 必須、1文字以上
        const message = messageInput.value.trim();
        if (!message) {
            errors.push('※内容を入力してください。');
        }

        return errors;
    }

    function displayErrors(errors) {
        // 既存のエラーメッセージを削除
        const existingError = document.querySelector('.contact-container > div[style*="background-color: #f8d7da"]:not([data-error-for])');
        if (existingError) {
            existingError.remove();
        }

        // 新しいエラーメッセージを表示
        const errorHtml = errors.join('<br>');
        const errorDiv = document.createElement('div');
        errorDiv.style.backgroundColor = '#f8d7da';
        errorDiv.style.color = '#721c24';
        errorDiv.style.padding = '15px';
        errorDiv.style.marginBottom = '20px';
        errorDiv.style.border = '1px solid #f5c6cb';
        errorDiv.style.borderRadius = '4px';
        errorDiv.innerHTML = errorHtml;

        // フォーム前に挿入
        contactForm.parentElement.insertBefore(errorDiv, contactForm);
    }

    function isValidName(str) {
        // 日本語（漢字、ひらがな、カタカナ）またはアルファベット、スペース、ハイフン
        const nameRegex = /^[\u4E00-\u9FFF\u3040-\u309F\u30A0-\u30FFａ-ｚＡ-Ｚa-zA-Z\s\-\u3000]+$/;
        return nameRegex.test(str);
    }

    function isValidPhone(str) {
        // 数字とハイフンのみ（ハイフンは自動挿入されるため、数字のみの入力を許可）
        const phoneRegex = /^[0-9\-]+$/;
        return phoneRegex.test(str);
    }

    function formatPhoneNumber(digits) {
        // 数字のみを受け取り、自動的にハイフンを挿入
        if (digits.length === 0) return '';
        if (digits.length <= 3) return digits;
        
        // 最初の1-3文字で市外局番を判定
        let formatted = '';
        
        // 090, 080, 070, 060の場合（携帯電話、IP電話）
        if (digits.match(/^(090|080|070|060)/)) {
            if (digits.length <= 3) {
                formatted = digits;
            } else if (digits.length <= 7) {
                formatted = digits.slice(0, 3) + '-' + digits.slice(3);
            } else {
                formatted = digits.slice(0, 3) + '-' + digits.slice(3, 7) + '-' + digits.slice(7, 11);
            }
        }
        // 0から始まり090等ではない場合（固定電話）
        else if (digits.startsWith('0')) {
            // 3桁市外局番の場合（0xxx-xx-xxxx）
            if (digits.match(/^0[1-9]{3}/)) {
                if (digits.length <= 4) {
                    formatted = digits;
                } else if (digits.length <= 6) {
                    formatted = digits.slice(0, 4) + '-' + digits.slice(4);
                } else {
                    formatted = digits.slice(0, 4) + '-' + digits.slice(4, 6) + '-' + digits.slice(6, 10);
                }
            }
            // 2桁市外局番の場合（0xx-xxxx-xxxx）
            else {
                if (digits.length <= 2) {
                    formatted = digits;
                } else if (digits.length <= 6) {
                    formatted = digits.slice(0, 2) + '-' + digits.slice(2);
                } else {
                    formatted = digits.slice(0, 2) + '-' + digits.slice(2, 6) + '-' + digits.slice(6, 10);
                }
            }
        }
        
        return formatted;
    }

    function isValidEmail(str) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(str);
    }

    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
});
</script>




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
                <?php echo wp_kses_post($error_message); ?>
            </div>
        <?php endif; ?>

        <form action="" method="post" class="contact-form">
            
            <div class="form-group">
                <label class="form-label">お問い合わせ内容 <span class="required">*</span></label>
                <div class="radio-group-vertical">
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="その他"> その他</label>
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="求人応募"> 求人応募</label>
                    <label class="radio-label"><input type="radio" name="inquiry_type" value="お問い合わせ"> お問い合わせ</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">お名前 <span class="required">*</span></label>
                <input type="text" name="your-name" class="form-control" placeholder="山田 太郎">
            </div>

            <div class="form-group">
                <label class="form-label">会社名・組織名</label>
                <input type="text" name="company-name" class="form-control" placeholder="株式会社〇〇">
            </div>

            <div class="form-group">
                <label class="form-label">お電話番号 <span class="required">*</span></label>
                <input type="tel" name="phone-number" class="form-control" placeholder="03-1234-5678">
            </div>

            <div class="form-group">
                <label class="form-label">メールアドレス <span class="required">*</span></label>
                <input type="email" name="your-email" class="form-control" placeholder="〇〇@example.com">
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
