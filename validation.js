function validationInputNumber(event) {
    const input = event.target;
    const value = input.value;

    const numericValue = value.replace(/[^0-9]/g, '');

    input.value = numericValue;
}

// สร้างฟังก์ชันสำหรับการตรวจสอบ reCAPTCHA และส่งแบบฟอร์ม
function validateForm() {
    // ตรวจสอบว่า reCAPTCHA ถูกตรวจสอบหรือไม่
    var recaptchaResponse = grecaptcha.getResponse();

    if (recaptchaResponse.length == 0) {
        // ถ้า reCAPTCHA ยังไม่ถูกตรวจสอบ
        alert("กรุณาตรวจสอบ reCAPTCHA ก่อนที่จะส่งแบบฟอร์ม");
        return false; // ยกเลิกการส่งแบบฟอร์ม
    } else {
        // ถ้า reCAPTCHA ถูกตรวจสอบแล้ว
        return true; // ส่งแบบฟอร์มไปยังเซิร์ฟเวอร์
    }
}
