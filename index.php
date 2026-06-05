<?php
$pageTitle = "Mobile Fraud Prevention and Subscriber Security Guide Philippines";
$metaDescription = "Learn practical strategies for mobile fraud prevention, subscriber security, account protection, and digital trust in the Philippines.";
$canonicalUrl = "https://smartsimreg.ph/mobile-fraud-prevention-guide";
$ogImage = "images/mobile-fraud-prevention-ph.jpg";
$publishDate = "2025-06-01";
$modifiedDate = "2025-06-05";
?>
<!DOCTYPE html>
<html lang="en-PH">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl); ?>">

  <!-- Open Graph -->
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:locale" content="en_PH">
  <meta property="og:site_name" content="SecureConnect PH">
  <meta property="article:published_time" content="<?php echo $publishDate; ?>">
  <meta property="article:modified_time" content="<?php echo $modifiedDate; ?>">
  <meta property="article:section" content="Mobile Security">

  <!-- Twitter Card -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- JSON-LD Article Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Article",
    "headline": "<?php echo htmlspecialchars($pageTitle); ?>",
    "description": "<?php echo htmlspecialchars($metaDescription); ?>",
    "image": "<?php echo htmlspecialchars($ogImage); ?>",
    "datePublished": "<?php echo $publishDate; ?>",
    "dateModified": "<?php echo $modifiedDate; ?>",
    "author": {
      "@type": "Organization",
      "name": "SecureConnect PH"
    },
    "publisher": {
      "@type": "Organization",
      "name": "SecureConnect PH",
      "logo": {
        "@type": "ImageObject",
        "url": "images/logo.png"
      }
    },
    "mainEntityOfPage": {
      "@type": "WebPage",
      "@id": "<?php echo htmlspecialchars($canonicalUrl); ?>"
    }
  }
  </script>

  <!-- JSON-LD FAQ Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "What is SIM registration and why is it required in the Philippines?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "SIM registration is a government-mandated process under Republic Act 11934 requiring all SIM card users to link their mobile numbers to a verified government-issued ID. It helps authorities trace scammers and protect subscribers from fraud by establishing a verified identity trail for each mobile account."
        }
      },
      {
        "@type": "Question",
        "name": "How do I know if my SIM is still registered and active?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "You can verify your SIM registration status directly through your network provider's official portal or app. Globe and Smart both offer online verification tools. If your SIM was not registered before the deadline, it may have been deactivated, and you will need to re-register or apply for a new SIM with proper ID."
        }
      },
      {
        "@type": "Question",
        "name": "What are the most common mobile scams targeting Filipinos?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "The most common scams include smishing (fraudulent text messages), vishing (voice call scams impersonating banks or government agencies), SIM swap fraud, prize or reward scams, and one-time password (OTP) phishing. These attacks often use urgency and fear to manipulate recipients into sharing sensitive information."
        }
      },
      {
        "@type": "Question",
        "name": "What should I do if I receive a suspicious text message?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Do not click any links or call back numbers in unsolicited messages. Do not share personal information, OTPs, or account credentials. Report the message to your telecom provider's fraud hotline and to the National Telecommunications Commission (NTC) through their official website at ntc.gov.ph."
        }
      },
      {
        "@type": "Question",
        "name": "Can someone steal my mobile number through SIM swap fraud?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes. SIM swap fraud occurs when a scammer convinces your network provider to transfer your mobile number to a new SIM card under their control. This gives them access to all OTPs and verification codes sent to your number. To prevent this, set a PIN or security phrase on your account with your telco and monitor for unexpected loss of signal."
        }
      },
      {
        "@type": "Question",
        "name": "How does two-factor authentication protect my mobile account?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Two-factor authentication (2FA) adds a second verification step beyond your password. Even if a fraudster obtains your password, they cannot access your account without the second factor — typically a code sent to your registered device or generated by an authenticator app. Using an app-based authenticator is more secure than SMS-based 2FA."
        }
      }
    ]
  }
  </script>

  <style>
    :root {
      --navy: #080f1f;
      --navy-mid: #0d1a35;
      --navy-light: #132040;
      --electric: #1e90ff;
      --electric-bright: #3aa8ff;
      --electric-dim: #0a5fa8;
      --white: #ffffff;
      --gray-light: #e8edf5;
      --gray-mid: #a0afc4;
      --gray-dark: #4a5c78;
      --accent-teal: #00d4c8;
      --accent-amber: #f59e0b;
      --danger: #ef4444;
      --success: #22c55e;
      --card-bg: #0f1d38;
      --border: rgba(30, 144, 255, 0.15);
      --shadow: 0 4px 32px rgba(0, 0, 0, 0.4);
      --shadow-blue: 0 4px 24px rgba(30, 144, 255, 0.18);
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    html { scroll-behavior: smooth; }

    body {
      font-family: 'DM Sans', sans-serif;
      background-color: var(--navy);
      color: var(--gray-light);
      line-height: 1.75;
      font-size: 16px;
    }

    h1, h2, h3, h4, h5 {
      font-family: 'Syne', sans-serif;
      color: var(--white);
      line-height: 1.25;
    }

    a { color: var(--electric-bright); text-decoration: none; transition: color 0.2s; }
    a:hover { color: var(--accent-teal); }

    img { max-width: 100%; height: auto; display: block; }

    p { margin-bottom: 1.1rem; color: var(--gray-light); }

    /* ── NAV ── */
    nav {
      position: sticky;
      top: 0;
      z-index: 100;
      background: rgba(8, 15, 31, 0.95);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid var(--border);
      padding: 0 2rem;
    }
    .nav-inner {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 64px;
      gap: 1rem;
    }
    .nav-logo {
      font-family: 'Syne', sans-serif;
      font-weight: 800;
      font-size: 1.15rem;
      color: var(--white);
      letter-spacing: -0.02em;
    }
    .nav-logo span { color: var(--electric); }
    .nav-links {
      display: flex;
      gap: 1.8rem;
      list-style: none;
    }
    .nav-links a {
      font-size: 0.85rem;
      font-weight: 500;
      color: var(--gray-mid);
      letter-spacing: 0.04em;
      text-transform: uppercase;
    }
    .nav-links a:hover { color: var(--white); }
    .nav-badge {
      background: var(--electric);
      color: #fff;
      font-size: 0.7rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: 100px;
      letter-spacing: 0.06em;
      text-transform: uppercase;
    }

    /* ── HERO ── */
    .hero {
      background: linear-gradient(135deg, var(--navy-mid) 0%, var(--navy) 60%, #060c1a 100%);
      border-bottom: 1px solid var(--border);
      padding: 5rem 2rem 4rem;
      position: relative;
      overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse 70% 50% at 60% 40%, rgba(30,144,255,0.08) 0%, transparent 70%);
      pointer-events: none;
    }
    .hero-grid {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    .hero-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-size: 0.75rem;
      font-weight: 600;
      letter-spacing: 0.1em;
      text-transform: uppercase;
      color: var(--electric);
      background: rgba(30,144,255,0.1);
      border: 1px solid rgba(30,144,255,0.25);
      padding: 5px 14px;
      border-radius: 100px;
      margin-bottom: 1.2rem;
    }
    .hero-label::before {
      content: '';
      width: 6px; height: 6px;
      background: var(--electric);
      border-radius: 50%;
      animation: pulse 2s infinite;
    }
    @keyframes pulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.5; transform: scale(1.4); }
    }
    .hero h1 {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 800;
      margin-bottom: 1.2rem;
      letter-spacing: -0.03em;
    }
    .hero h1 em {
      font-style: normal;
      color: var(--electric);
    }
    .hero-desc {
      font-size: 1.05rem;
      color: var(--gray-mid);
      margin-bottom: 1.8rem;
      max-width: 480px;
    }
    .hero-meta {
      display: flex;
      gap: 1.5rem;
      font-size: 0.8rem;
      color: var(--gray-dark);
    }
    .hero-meta span { display: flex; align-items: center; gap: 5px; }
    .hero-image-wrap {
      border-radius: 16px;
      overflow: hidden;
      border: 1px solid var(--border);
      box-shadow: var(--shadow-blue);
      position: relative;
    }
    .hero-image-wrap img {
      width: 100%;
      height: 340px;
      object-fit: cover;
    }
    .hero-image-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(135deg, rgba(8,15,31,0.3) 0%, transparent 60%);
    }

    /* ── CONTAINER ── */
    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 2rem;
    }
    .content-wrap {
      display: grid;
      grid-template-columns: 1fr 300px;
      gap: 3rem;
      padding: 3rem 2rem;
      max-width: 1200px;
      margin: 0 auto;
    }
    .main-content { min-width: 0; }

    /* ── STATS ── */
    .stats-section {
      background: var(--navy-mid);
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
      padding: 2.5rem 2rem;
    }
    .stats-grid {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 1.5rem;
    }
    .stat-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.5rem;
      text-align: center;
      transition: transform 0.2s, box-shadow 0.2s;
    }
    .stat-card:hover {
      transform: translateY(-3px);
      box-shadow: var(--shadow-blue);
    }
    .stat-number {
      font-family: 'Syne', sans-serif;
      font-size: 2.2rem;
      font-weight: 800;
      color: var(--electric);
      display: block;
      margin-bottom: 0.25rem;
    }
    .stat-label {
      font-size: 0.8rem;
      color: var(--gray-mid);
      line-height: 1.4;
    }

    /* ── TOC ── */
    .toc-box {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-left: 3px solid var(--electric);
      border-radius: 12px;
      padding: 1.5rem 1.75rem;
      margin-bottom: 2.5rem;
    }
    .toc-box h3 {
      font-size: 0.85rem;
      letter-spacing: 0.08em;
      text-transform: uppercase;
      color: var(--electric);
      margin-bottom: 1rem;
    }
    .toc-box ol {
      padding-left: 1.2rem;
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }
    .toc-box li {
      font-size: 0.9rem;
      color: var(--gray-mid);
    }
    .toc-box li a {
      color: var(--gray-mid);
    }
    .toc-box li a:hover { color: var(--electric-bright); }

    /* ── SECTIONS ── */
    section { margin-bottom: 2.8rem; }

    h2 {
      font-size: 1.6rem;
      font-weight: 700;
      margin-bottom: 1rem;
      padding-bottom: 0.6rem;
      border-bottom: 1px solid var(--border);
    }

    h3 { font-size: 1.15rem; font-weight: 600; margin-bottom: 0.6rem; color: var(--gray-light); }

    /* ── CALLOUT ── */
    .callout {
      border-radius: 12px;
      padding: 1.25rem 1.5rem;
      margin: 1.8rem 0;
      display: flex;
      gap: 1rem;
      align-items: flex-start;
    }
    .callout-info {
      background: rgba(30,144,255,0.08);
      border: 1px solid rgba(30,144,255,0.25);
    }
    .callout-warning {
      background: rgba(245,158,11,0.07);
      border: 1px solid rgba(245,158,11,0.25);
    }
    .callout-danger {
      background: rgba(239,68,68,0.07);
      border: 1px solid rgba(239,68,68,0.25);
    }
    .callout-icon { font-size: 1.3rem; flex-shrink: 0; margin-top: 2px; }
    .callout p { margin: 0; font-size: 0.92rem; }

    /* ── THREAT CARDS ── */
    .cards-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1.2rem;
      margin: 1.5rem 0;
    }
    .threat-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.25rem;
      transition: border-color 0.2s, box-shadow 0.2s;
    }
    .threat-card:hover {
      border-color: var(--electric-dim);
      box-shadow: var(--shadow-blue);
    }
    .threat-card .card-icon {
      font-size: 1.6rem;
      margin-bottom: 0.6rem;
    }
    .threat-card h3 {
      font-size: 1rem;
      color: var(--white);
      margin-bottom: 0.4rem;
    }
    .threat-card p {
      font-size: 0.85rem;
      color: var(--gray-mid);
      margin: 0;
    }

    /* ── TIPS CARDS ── */
    .tips-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.2rem;
      margin: 1.5rem 0;
    }
    .tip-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.25rem;
      border-top: 3px solid var(--electric);
      transition: transform 0.2s;
    }
    .tip-card:hover { transform: translateY(-3px); }
    .tip-number {
      font-family: 'Syne', sans-serif;
      font-size: 1.8rem;
      font-weight: 800;
      color: rgba(30,144,255,0.25);
      display: block;
      margin-bottom: 0.5rem;
    }
    .tip-card h3 { font-size: 0.95rem; margin-bottom: 0.4rem; }
    .tip-card p { font-size: 0.83rem; color: var(--gray-mid); margin: 0; }

    /* ── TIMELINE ── */
    .timeline { position: relative; padding-left: 2rem; margin: 1.5rem 0; }
    .timeline::before {
      content: '';
      position: absolute;
      left: 6px;
      top: 0; bottom: 0;
      width: 2px;
      background: linear-gradient(to bottom, var(--electric), var(--electric-dim));
    }
    .timeline-item {
      position: relative;
      margin-bottom: 1.8rem;
      padding-left: 1rem;
    }
    .timeline-item::before {
      content: '';
      position: absolute;
      left: -1.7rem;
      top: 6px;
      width: 12px; height: 12px;
      background: var(--electric);
      border-radius: 50%;
      box-shadow: 0 0 0 4px rgba(30,144,255,0.15);
    }
    .timeline-date {
      font-size: 0.75rem;
      font-weight: 700;
      color: var(--electric);
      text-transform: uppercase;
      letter-spacing: 0.08em;
      margin-bottom: 0.2rem;
    }
    .timeline-item h3 { font-size: 1rem; margin-bottom: 0.3rem; }
    .timeline-item p { font-size: 0.88rem; color: var(--gray-mid); margin: 0; }

    /* ── CHECKLIST ── */
    .checklist {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.5rem;
      margin: 1.5rem 0;
    }
    .checklist h3 {
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--electric);
      margin-bottom: 1rem;
    }
    .checklist ul { list-style: none; display: flex; flex-direction: column; gap: 0.6rem; }
    .checklist li {
      display: flex;
      align-items: flex-start;
      gap: 0.7rem;
      font-size: 0.9rem;
      color: var(--gray-light);
    }
    .checklist li::before {
      content: '✓';
      color: var(--success);
      font-weight: 700;
      flex-shrink: 0;
      margin-top: 1px;
    }

    /* ── COMPARISON TABLE ── */
    .table-wrap { overflow-x: auto; margin: 1.5rem 0; border-radius: 12px; border: 1px solid var(--border); }
    table { width: 100%; border-collapse: collapse; }
    thead tr { background: var(--navy-light); }
    th {
      padding: 0.9rem 1.1rem;
      text-align: left;
      font-family: 'Syne', sans-serif;
      font-size: 0.8rem;
      font-weight: 700;
      letter-spacing: 0.06em;
      text-transform: uppercase;
      color: var(--electric);
      border-bottom: 1px solid var(--border);
    }
    td {
      padding: 0.85rem 1.1rem;
      font-size: 0.88rem;
      color: var(--gray-light);
      border-bottom: 1px solid rgba(30,144,255,0.07);
    }
    tbody tr:last-child td { border-bottom: none; }
    tbody tr:hover td { background: rgba(30,144,255,0.04); }
    .badge {
      display: inline-block;
      padding: 2px 10px;
      border-radius: 100px;
      font-size: 0.75rem;
      font-weight: 600;
    }
    .badge-high { background: rgba(239,68,68,0.15); color: #f87171; }
    .badge-med { background: rgba(245,158,11,0.15); color: #fbbf24; }
    .badge-low { background: rgba(34,197,94,0.15); color: #4ade80; }

    /* ── QUOTE ── */
    .quote-block {
      border-left: 4px solid var(--electric);
      background: var(--card-bg);
      border-radius: 0 12px 12px 0;
      padding: 1.5rem 2rem;
      margin: 2rem 0;
    }
    .quote-text {
      font-size: 1.1rem;
      font-style: italic;
      color: var(--white);
      line-height: 1.65;
      margin-bottom: 0.75rem;
    }
    .quote-attr {
      font-size: 0.8rem;
      color: var(--gray-dark);
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 0.06em;
    }

    /* ── FAQ ── */
    .faq-item {
      border: 1px solid var(--border);
      border-radius: 12px;
      margin-bottom: 0.8rem;
      overflow: hidden;
      transition: border-color 0.2s;
    }
    .faq-item:hover { border-color: var(--electric-dim); }
    .faq-question {
      width: 100%;
      background: var(--card-bg);
      border: none;
      padding: 1.1rem 1.4rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      cursor: pointer;
      text-align: left;
      gap: 1rem;
    }
    .faq-question-text {
      font-family: 'Syne', sans-serif;
      font-size: 0.95rem;
      font-weight: 600;
      color: var(--white);
    }
    .faq-icon {
      width: 24px; height: 24px;
      background: rgba(30,144,255,0.15);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--electric);
      font-size: 1rem;
      font-weight: 700;
      flex-shrink: 0;
      transition: transform 0.3s, background 0.2s;
    }
    .faq-item.open .faq-icon {
      transform: rotate(45deg);
      background: var(--electric);
      color: #fff;
    }
    .faq-answer {
      display: none;
      padding: 0 1.4rem 1.2rem;
      background: var(--card-bg);
    }
    .faq-answer p {
      font-size: 0.9rem;
      color: var(--gray-mid);
      margin: 0;
    }
    .faq-item.open .faq-answer { display: block; }

    /* ── SIDEBAR ── */
    .sidebar { display: flex; flex-direction: column; gap: 1.5rem; }
    .sidebar-card {
      background: var(--card-bg);
      border: 1px solid var(--border);
      border-radius: 12px;
      padding: 1.4rem;
    }
    .sidebar-card h4 {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--electric);
      margin-bottom: 1rem;
    }
    .resource-link {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      padding: 0.65rem 0;
      border-bottom: 1px solid var(--border);
      font-size: 0.85rem;
      color: var(--gray-mid);
      transition: color 0.2s;
    }
    .resource-link:last-child { border-bottom: none; }
    .resource-link:hover { color: var(--electric-bright); }
    .resource-link::before {
      content: '→';
      color: var(--electric);
      font-weight: 700;
    }
    .alert-box {
      background: rgba(239,68,68,0.08);
      border: 1px solid rgba(239,68,68,0.25);
      border-radius: 10px;
      padding: 1.2rem;
      font-size: 0.85rem;
      color: var(--gray-light);
    }
    .alert-box strong { color: #f87171; display: block; margin-bottom: 0.4rem; }

    /* ── FOOTER ── */
    footer {
      background: #050b18;
      border-top: 1px solid var(--border);
      padding: 3rem 2rem 2rem;
      margin-top: 4rem;
    }
    .footer-inner {
      max-width: 1200px;
      margin: 0 auto;
    }
    .footer-top {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      gap: 2.5rem;
      margin-bottom: 2rem;
      padding-bottom: 2rem;
      border-bottom: 1px solid var(--border);
    }
    .footer-brand p {
      font-size: 0.85rem;
      color: var(--gray-dark);
      margin-top: 0.75rem;
      max-width: 300px;
    }
    footer h5 {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.08em;
      color: var(--gray-mid);
      margin-bottom: 0.9rem;
    }
    footer ul { list-style: none; display: flex; flex-direction: column; gap: 0.5rem; }
    footer ul li a { font-size: 0.85rem; color: var(--gray-dark); }
    footer ul li a:hover { color: var(--gray-light); }
    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.78rem;
      color: var(--gray-dark);
    }
    .footer-disclaimer {
      max-width: 1200px;
      margin: 1.5rem auto 0;
      font-size: 0.76rem;
      color: var(--gray-dark);
      line-height: 1.6;
      padding-top: 1.5rem;
      border-top: 1px solid var(--border);
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .hero-grid { grid-template-columns: 1fr; }
      .hero-image-wrap { display: none; }
      .content-wrap { grid-template-columns: 1fr; }
      .sidebar { display: none; }
      .stats-grid { grid-template-columns: repeat(2, 1fr); }
      .tips-grid { grid-template-columns: repeat(2, 1fr); }
      .footer-top { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 600px) {
      .nav-links { display: none; }
      .stats-grid { grid-template-columns: 1fr 1fr; }
      .cards-grid { grid-template-columns: 1fr; }
      .tips-grid { grid-template-columns: 1fr; }
      .footer-top { grid-template-columns: 1fr; }
      .footer-bottom { flex-direction: column; gap: 0.5rem; text-align: center; }
    }
  </style>
</head>
<body>

<!-- ── NAVIGATION ── -->
<nav role="navigation" aria-label="Main navigation">
  <div class="nav-inner">
    <span class="nav-logo">Secure<span>Connect</span> PH</span>
    <ul class="nav-links">
      <li><a href="#threats">Threats</a></li>
      <li><a href="#protection">Protection</a></li>
      <li><a href="#verification">Verification</a></li>
      <li><a href="#faq">FAQ</a></li>
    </ul>
    <span class="nav-badge">PH Edition 2025</span>
  </div>
</nav>

<!-- ── HERO ── -->
<header class="hero" role="banner">
  <div class="hero-grid">
    <div class="hero-text">
      <span class="hero-label">Consumer Security Guide</span>
      <h1>Mobile Fraud Prevention and <em>Subscriber Security</em> Guide</h1>
      <p class="hero-desc">A practical resource for Filipino mobile users on protecting their SIM, identity, and digital communications from fraud in 2025.</p>
      <div class="hero-meta">
        <span>📅 Updated June 2025</span>
        <span>⏱ 7 min read</span>
        <span>🇵🇭 Philippines</span>
      </div>
    </div>
    <div class="hero-image-wrap">
      <img src="images/mobile-fraud-prevention-ph.jpg"
           alt="Mobile Fraud Prevention and Subscriber Security in the Philippines"
           width="600" height="340"
           loading="eager">
      <div class="hero-image-overlay"></div>
    </div>
  </div>
</header>

<!-- ── STATS ── -->
<section class="stats-section" aria-label="Mobile fraud statistics Philippines">
  <div class="stats-grid">
    <div class="stat-card">
      <span class="stat-number">₱2.4B</span>
      <span class="stat-label">Estimated annual losses from mobile fraud in the Philippines</span>
    </div>
    <div class="stat-card">
      <span class="stat-number">158M+</span>
      <span class="stat-label">Active SIM cards registered under RA 11934 as of 2024</span>
    </div>
    <div class="stat-card">
      <span class="stat-number">62%</span>
      <span class="stat-label">Of Filipinos who received at least one scam message in the past year</span>
    </div>
    <div class="stat-card">
      <span class="stat-number">3x</span>
      <span class="stat-label">Increase in SIM swap fraud reports since digital banking expanded</span>
    </div>
  </div>
</section>

<!-- ── MAIN CONTENT + SIDEBAR ── -->
<div class="content-wrap">
  <main class="main-content" id="main-content" role="main">

    <!-- Table of Contents -->
    <nav class="toc-box" aria-label="Table of contents">
      <h3>In This Guide</h3>
      <ol>
        <li><a href="#risks">Understanding Mobile Fraud Risks</a></li>
        <li><a href="#threats">Common Subscriber Security Threats</a></li>
        <li><a href="#how-fraudsters">How Fraudsters Target Mobile Users</a></li>
        <li><a href="#verification">Identity Verification and Account Protection</a></li>
        <li><a href="#protection">How Consumers Can Secure Their Mobile Accounts</a></li>
        <li><a href="#scam-comms">Recognizing Scam Communications</a></li>
        <li><a href="#future">The Future of Subscriber Security</a></li>
        <li><a href="#faq">Frequently Asked Questions</a></li>
      </ol>
    </nav>

    <!-- Intro -->
    <p>Mobile phones are no longer just communication devices. For most Filipinos, they are gateways to banking, government services, e-commerce, and social identity. That convergence has made mobile numbers extraordinarily valuable — and consequently, a prime target for criminals who use technical exploits and social manipulation to compromise accounts, steal funds, and assume identities.</p>

    <p>This guide consolidates the most reliable information available on mobile fraud patterns in the Philippines, the protections that currently exist, and the practical steps every subscriber can take to reduce their exposure. The landscape is evolving rapidly, but the foundational principles of subscriber security remain consistent.</p>

    <!-- Section 1 -->
    <section id="risks">
      <h2>Understanding Mobile Fraud Risks</h2>
      <p>Mobile fraud encompasses any scheme in which a criminal uses a mobile network, device, or account to deceive, steal from, or harm a subscriber. In the Philippines, where mobile internet penetration exceeds 70 percent and digital wallets are widely used, the stakes are particularly high.</p>

      <p>The passage of the SIM Registration Act (Republic Act 11934) in 2022 marked a significant policy shift. By requiring all subscribers to register their SIM cards with a verified government ID, the law aimed to create accountability in mobile communications and reduce the anonymity that scammers had long exploited. However, registration alone does not eliminate fraud — it shifts the burden of verification and creates new attack surfaces if that data is not adequately protected.</p>

      <div class="callout callout-info">
        <span class="callout-icon">ℹ️</span>
        <p>The <a href="https://www.ntc.gov.ph/" target="_blank" rel="noopener noreferrer">National Telecommunications Commission (NTC)</a> is the primary regulatory body overseeing telecommunications consumer protection in the Philippines. Fraud complaints involving mobile operators can be filed directly through their official channels.</p>
      </div>

      <p>Understanding the risk landscape begins with recognizing that fraud is not purely a technology problem. Most successful mobile fraud schemes rely on a combination of technical access and human manipulation — exploiting trust, urgency, and the information gaps that exist between subscribers and their service providers.</p>
    </section>

    <!-- Section 2 -->
    <section id="threats">
      <h2>Common Subscriber Security Threats</h2>
      <p>Filipino mobile users face a distinct set of threats shaped by local digital habits, the prevalence of specific apps, and the way financial services are layered on top of mobile accounts.</p>

      <div class="cards-grid">
        <article class="threat-card">
          <div class="card-icon">💬</div>
          <h3>Smishing (SMS Phishing)</h3>
          <p>Fraudulent text messages containing malicious links or false claims about account problems, prizes, or delivery notifications designed to harvest credentials.</p>
        </article>
        <article class="threat-card">
          <div class="card-icon">📞</div>
          <h3>Vishing (Voice Phishing)</h3>
          <p>Scam calls impersonating bank representatives, government officials, or telco support agents to coerce subscribers into sharing OTPs or personal data.</p>
        </article>
        <article class="threat-card">
          <div class="card-icon">🔄</div>
          <h3>SIM Swap Fraud</h3>
          <p>Criminals convince a telco to transfer a victim's number to a new SIM card, gaining control of all SMS-based two-factor authentication codes.</p>
        </article>
        <article class="threat-card">
          <div class="card-icon">🎭</div>
          <h3>Identity Spoofing</h3>
          <p>Attackers forge caller IDs or sender numbers to make communications appear to come from legitimate institutions, lowering the victim's guard.</p>
        </article>
        <article class="threat-card">
          <div class="card-icon">💸</div>
          <h3>e-Wallet Account Takeover</h3>
          <p>After obtaining login credentials through phishing, fraudsters drain digital wallets before the victim can act. GCash and Maya are frequently targeted.</p>
        </article>
        <article class="threat-card">
          <div class="card-icon">🔑</div>
          <h3>OTP Interception</h3>
          <p>Scammers trick users into sharing one-time passwords by impersonating customer service or fabricating urgent account security alerts.</p>
        </article>
      </div>
    </section>

    <!-- Section 3 -->
    <section id="how-fraudsters">
      <h2>How Fraudsters Target Mobile Users</h2>
      <p>Modern mobile fraud rarely involves brute-force technical attacks on carrier infrastructure. The more common vector is a carefully constructed social engineering sequence — one that begins with gathering publicly available information and ends with a precisely timed manipulation attempt.</p>

      <!-- Timeline -->
      <div class="timeline" aria-label="Fraud attack sequence timeline">
        <div class="timeline-item">
          <div class="timeline-date">Stage 1</div>
          <h3>Reconnaissance</h3>
          <p>Fraudsters compile data from social media, data breach lists, and public records to build a profile: name, birthday, employer, mobile number, and linked financial accounts.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">Stage 2</div>
          <h3>Initial Contact</h3>
          <p>A convincing message or call is crafted using the harvested data. Knowing your name and bank makes the interaction feel legitimate even when it is not.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">Stage 3</div>
          <h3>Urgency Creation</h3>
          <p>The scammer introduces a high-pressure scenario — a locked account, a pending fraud investigation, or an expiring prize — to reduce deliberate thinking.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">Stage 4</div>
          <h3>Credential Harvest</h3>
          <p>The victim is directed to a fake portal or prompted to verbally share an OTP, password, or security question answer under the guise of verification.</p>
        </div>
        <div class="timeline-item">
          <div class="timeline-date">Stage 5</div>
          <h3>Exploitation</h3>
          <p>Using stolen credentials, the fraudster transfers funds, makes unauthorized purchases, or escalates access to linked accounts before the victim realizes what has happened.</p>
        </div>
      </div>

      <div class="callout callout-warning">
        <span class="callout-icon">⚠️</span>
        <p>Legitimate banks, telcos, and government agencies in the Philippines will <strong>never ask you to share your OTP, full password, or PIN</strong> through any channel — whether by call, SMS, or chat. An OTP request is the clearest possible signal that you are being targeted.</p>
      </div>
    </section>

    <!-- Section 4 -->
    <section id="verification">
      <h2>Identity Verification and Account Protection</h2>
      <p>The SIM Registration Act created a formal linkage between mobile numbers and verified identities. This was an important structural improvement, but it raised a question that many subscribers still have: is my registration current, and what does it actually protect?</p>

      <p>Registration establishes that a number is tied to a real person with a government-issued ID. It does not, by itself, prevent someone from fraudulently requesting a replacement SIM or from using your data if it has been compromised in a breach. This is why active account monitoring remains essential even after registration is complete.</p>

      <p>If you are unsure about your current registration status or need to verify the details on file with your network provider, you can check <a href="https://smartsimreg.ph/" rel="noopener">how to know if your sim is registered</a> through the official verification portal — a straightforward process that takes just a few minutes and provides immediate confirmation of your account status.</p>

      <div class="callout callout-info">
        <span class="callout-icon">🔐</span>
        <p>Both <a href="https://www.smart.com.ph/" target="_blank" rel="noopener noreferrer">Smart Communications</a> and <a href="https://www.globe.com.ph/" target="_blank" rel="noopener noreferrer">Globe Telecom</a> offer additional account security features — including account PINs, security phrases, and SIM lock options — that provide an extra layer of protection against unauthorized SIM swaps. Subscribers are encouraged to activate these features proactively.</p>
      </div>

      <h3>What Verified Registration Protects Against</h3>
      <p>Registration deters casual fraud by eliminating anonymous SIM acquisition. When a number is tied to a real identity, law enforcement can trace fraudulent communications more efficiently. It also enables telcos to validate ownership claims during account recovery, which reduces the risk of successful SIM swap attacks by fraudsters who lack the matching credentials.</p>

      <h3>What It Does Not Prevent</h3>
      <p>Registration alone does not protect against phishing, vishing, malware on your device, or insider threats within telco or retail systems. The human factor — a subscriber who shares their OTP or a retail agent who processes a fraudulent SIM swap — remains the most significant vulnerability in the system.</p>
    </section>

    <!-- Section 5 -->
    <section id="protection">
      <h2>How Consumers Can Secure Their Mobile Accounts</h2>
      <p>Effective mobile security does not require technical expertise. Most protective measures are procedural: consistent habits that make your account significantly harder to compromise.</p>

      <div class="tips-grid">
        <article class="tip-card">
          <span class="tip-number">01</span>
          <h3>Set a Telco Account PIN</h3>
          <p>Contact your network provider to set a secret PIN or security phrase required for any account changes, including SIM replacement requests.</p>
        </article>
        <article class="tip-card">
          <span class="tip-number">02</span>
          <h3>Use an Authenticator App</h3>
          <p>Replace SMS-based 2FA with an app-based authenticator (such as Google Authenticator or Aegis) for banking and e-wallet accounts wherever possible.</p>
        </article>
        <article class="tip-card">
          <span class="tip-number">03</span>
          <h3>Monitor for Sudden Signal Loss</h3>
          <p>An unexpected loss of mobile signal can indicate a SIM swap in progress. Contact your telco immediately if this occurs without a clear technical explanation.</p>
        </article>
        <article class="tip-card">
          <span class="tip-number">04</span>
          <h3>Audit Linked Accounts</h3>
          <p>Review which services are linked to your mobile number for authentication. Remove connections to platforms you no longer actively use.</p>
        </article>
        <article class="tip-card">
          <span class="tip-number">05</span>
          <h3>Never Share OTPs</h3>
          <p>No legitimate institution will ever ask for your OTP. Treat any such request as a confirmed fraud attempt and terminate the interaction immediately.</p>
        </article>
        <article class="tip-card">
          <span class="tip-number">06</span>
          <h3>Report Suspicious Activity</h3>
          <p>File reports with your telco's fraud team and with the NTC. Reporting helps protect other subscribers and builds the evidentiary record used in investigations.</p>
        </article>
      </div>

      <!-- Checklist -->
      <div class="checklist">
        <h3>Mobile Security Checklist</h3>
        <ul>
          <li>SIM is registered under your verified government ID</li>
          <li>Telco account PIN or security phrase is active</li>
          <li>Email account linked to your telco account has a strong, unique password</li>
          <li>Banking apps use biometric or app-based 2FA rather than SMS only</li>
          <li>You know your telco's official fraud hotline number</li>
          <li>Unnecessary app permissions to SMS and contacts have been revoked</li>
          <li>Device lock screen is enabled with PIN, pattern, or biometric</li>
          <li>You have reviewed which services send verification codes to your number</li>
        </ul>
      </div>
    </section>

    <!-- Section 6 -->
    <section id="scam-comms">
      <h2>Recognizing Scam Communications</h2>
      <p>The volume of scam messages and calls targeting Filipino subscribers is high enough that pattern recognition is a practical skill rather than an abstract precaution. Most fraudulent communications share identifiable structural features.</p>

      <div class="table-wrap">
        <table aria-label="Comparison of legitimate vs scam communications">
          <thead>
            <tr>
              <th>Feature</th>
              <th>Legitimate Communications</th>
              <th>Scam Communications</th>
              <th>Risk Level</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sender identity</td>
              <td>Registered brand name or known contact</td>
              <td>Random number, foreign code, or spoofed brand</td>
              <td><span class="badge badge-high">High</span></td>
            </tr>
            <tr>
              <td>OTP or credential request</td>
              <td>Never requested via call or SMS</td>
              <td>Frequently requests OTP, PIN, or password</td>
              <td><span class="badge badge-high">High</span></td>
            </tr>
            <tr>
              <td>Urgency or threat</td>
              <td>Routine notifications without pressure</td>
              <td>Immediate action required to avoid penalty</td>
              <td><span class="badge badge-high">High</span></td>
            </tr>
            <tr>
              <td>Links included</td>
              <td>Official domain (e.g., globe.com.ph)</td>
              <td>Shortened URLs, misspelled domains</td>
              <td><span class="badge badge-med">Medium</span></td>
            </tr>
            <tr>
              <td>Prize or reward offer</td>
              <td>Verified through official app or website</td>
              <td>Unsolicited prize requiring personal data</td>
              <td><span class="badge badge-med">Medium</span></td>
            </tr>
            <tr>
              <td>Grammar and spelling</td>
              <td>Professional, consistent with brand</td>
              <td>Irregular errors, unusual phrasing</td>
              <td><span class="badge badge-low">Low</span></td>
            </tr>
          </tbody>
        </table>
      </div>

      <div class="quote-block">
        <p class="quote-text">"The defining characteristic of a fraud attempt is not technical sophistication — it is the creation of a scenario where the victim feels they have no time to think. The moment someone feels pressured to act immediately with their financial or personal data, that pressure itself is the threat."</p>
        <span class="quote-attr">— Consumer Protection Guidance, National Telecommunications Commission Philippines</span>
      </div>
    </section>

    <!-- Section 7 -->
    <section id="future">
      <h2>The Future of Subscriber Security</h2>
      <p>The telecommunications security landscape in the Philippines is being shaped by several converging developments that will alter both the nature of threats and the tools available to counter them over the next several years.</p>

      <p><strong>AI-generated scam content</strong> is becoming increasingly convincing. Voice cloning technology can now replicate familiar voices with brief audio samples, enabling scammers to impersonate family members in distress calls — a tactic already observed internationally that has begun appearing in Philippine cases. Text-based scams are also becoming harder to distinguish from legitimate communications as language models improve.</p>

      <p><strong>Carrier-level fraud detection</strong> is advancing in parallel. Both Globe and Smart have invested in network-layer systems that analyze message patterns and call behaviors at scale, flagging anomalies before they reach subscribers. The NTC's ongoing collaboration with international regulatory counterparts is also improving cross-border fraud tracking.</p>

      <p><strong>Biometric authentication</strong> is gradually reducing reliance on SMS-based OTPs for high-value transactions. Philippine banks and digital payment providers are incrementally moving toward fingerprint, facial recognition, and behavioral biometric systems that are significantly harder to circumvent through social engineering alone.</p>

      <p><strong>Legislative evolution</strong> continues with the Data Privacy Act (RA 10173), e-Commerce Act (RA 8792), and Cybercrime Prevention Act (RA 10175) providing the enforcement framework. Amendments and new implementing rules are periodically reviewed by the relevant agencies to address gaps exposed by evolving fraud tactics.</p>

      <div class="callout callout-danger">
        <span class="callout-icon">🚨</span>
        <p>If you suspect your SIM has been swapped or your mobile account has been compromised, call your network provider's fraud hotline immediately and request a temporary suspension of your account. Do not wait to confirm the compromise — early intervention dramatically improves recovery outcomes.</p>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" aria-labelledby="faq-heading">
      <h2 id="faq-heading">Frequently Asked Questions</h2>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">What is SIM registration and why is it required in the Philippines?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>SIM registration is a government-mandated process under Republic Act 11934 requiring all SIM card users to link their mobile numbers to a verified government-issued ID. It helps authorities trace scammers and protect subscribers from fraud by establishing a verified identity trail for each mobile account.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">How do I know if my SIM is still registered and active?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>You can verify your SIM registration status directly through your network provider's official portal or app. Globe and Smart both offer online verification tools. If your SIM was not registered before the deadline, it may have been deactivated, and you will need to re-register or apply for a new SIM with proper ID.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">What are the most common mobile scams targeting Filipinos?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>The most common scams include smishing (fraudulent text messages), vishing (voice call scams impersonating banks or government agencies), SIM swap fraud, prize or reward scams, and OTP phishing. These attacks often use urgency and fear to manipulate recipients into sharing sensitive information.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">What should I do if I receive a suspicious text message?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>Do not click any links or call back numbers in unsolicited messages. Do not share personal information, OTPs, or account credentials. Report the message to your telecom provider's fraud hotline and to the NTC through their official website at ntc.gov.ph.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">Can someone steal my mobile number through SIM swap fraud?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>Yes. SIM swap fraud occurs when a scammer convinces your network provider to transfer your mobile number to a new SIM card under their control. This gives them access to all OTPs and verification codes sent to your number. To prevent this, set a PIN or security phrase on your account with your telco and monitor for unexpected loss of signal.</p>
        </div>
      </div>

      <div class="faq-item">
        <button class="faq-question" aria-expanded="false">
          <span class="faq-question-text">How does two-factor authentication protect my mobile account?</span>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div class="faq-answer" role="region">
          <p>Two-factor authentication adds a second verification step beyond your password. Even if a fraudster obtains your password, they cannot access your account without the second factor — typically a code sent to your registered device or generated by an authenticator app. Using an app-based authenticator is more secure than SMS-based 2FA.</p>
        </div>
      </div>
    </section>

    <!-- Conclusion -->
    <section id="conclusion">
      <h2>Conclusion</h2>
      <p>Mobile fraud in the Philippines is not a static threat. It adapts to technological change, exploits behavioral patterns, and scales with the growth of digital finance. No single measure fully insulates a subscriber against every possible attack — but a layered approach significantly raises the cost and difficulty of successful fraud.</p>

      <p>The fundamentals are straightforward: register and verify your SIM, set telco account security features, use app-based authentication where available, treat unsolicited credential requests with immediate suspicion, and know how to report incidents quickly. These steps, consistently applied, represent the most effective defense available to individual subscribers.</p>

      <p>Regulatory and technical improvements continue at the institutional level, but personal vigilance remains the foundation of mobile security. Staying informed, regularly reviewing account settings, and taking a moment to verify before responding to any unexpected contact are habits that meaningfully reduce risk in an environment where mobile fraud has become routine.</p>
    </section>

  </main>

  <!-- ── SIDEBAR ── -->
  <aside class="sidebar" aria-label="Related resources">
    <div class="sidebar-card">
      <h4>Official Resources</h4>
      <a class="resource-link" href="https://www.ntc.gov.ph/" target="_blank" rel="noopener noreferrer">NTC — File a Complaint</a>
      <a class="resource-link" href="https://www.smart.com.ph/" target="_blank" rel="noopener noreferrer">Smart — Account Security</a>
      <a class="resource-link" href="https://www.globe.com.ph/" target="_blank" rel="noopener noreferrer">Globe — Fraud Reporting</a>
      <a class="resource-link" href="https://smartsimreg.ph/" target="_blank" rel="noopener noreferrer">SIM Registration Verification</a>
    </div>

    <div class="alert-box">
      <strong>🚨 Fraud Hotlines</strong>
      Smart: 1800-10-888-1111<br>
      Globe: 211 (Globe subscribers)<br>
      NTC: (02) 8921-3251<br>
      DICT: 1326
    </div>

    <div class="sidebar-card">
      <h4>Quick Security Checks</h4>
      <a class="resource-link" href="#protection">Set Telco Account PIN</a>
      <a class="resource-link" href="#verification">Verify SIM Registration</a>
      <a class="resource-link" href="#scam-comms">Spot Scam Messages</a>
      <a class="resource-link" href="#faq">FAQ — Common Questions</a>
    </div>

    <div class="sidebar-card">
      <h4>Relevant Legislation</h4>
      <a class="resource-link" href="#future">RA 11934 — SIM Registration Act</a>
      <a class="resource-link" href="#future">RA 10173 — Data Privacy Act</a>
      <a class="resource-link" href="#future">RA 10175 — Cybercrime Prevention</a>
    </div>
  </aside>
</div>

<!-- ── FOOTER ── -->
<footer role="contentinfo">
  <div class="footer-inner">
    <div class="footer-top">
      <div class="footer-brand">
        <span class="nav-logo">Secure<span>Connect</span> PH</span>
        <p>An independent educational resource covering mobile security, subscriber protection, and digital trust for Filipino consumers.</p>
      </div>
      <div>
        <h5>Topics</h5>
        <ul>
          <li><a href="#risks">Mobile Fraud Risks</a></li>
          <li><a href="#threats">Subscriber Threats</a></li>
          <li><a href="#verification">SIM Verification</a></li>
          <li><a href="#protection">Account Security</a></li>
          <li><a href="#faq">FAQ</a></li>
        </ul>
      </div>
      <div>
        <h5>Authorities</h5>
        <ul>
          <li><a href="https://www.ntc.gov.ph/" target="_blank" rel="noopener noreferrer">NTC Philippines</a></li>
          <li><a href="https://www.smart.com.ph/" target="_blank" rel="noopener noreferrer">Smart Communications</a></li>
          <li><a href="https://www.globe.com.ph/" target="_blank" rel="noopener noreferrer">Globe Telecom</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo date('Y'); ?> SecureConnect PH. Educational use only.</span>
      <span>Updated: <?php echo date('F Y', strtotime($modifiedDate)); ?></span>
    </div>
    <p class="footer-disclaimer">This website is an independent educational resource intended to inform Filipino consumers about mobile fraud risks and subscriber security practices. It is not affiliated with any telecommunications provider or government agency. All external links reference official sources for informational purposes only. For urgent fraud-related matters, contact your network provider or the NTC directly.</p>
  </div>
</footer>

<script>
  // FAQ Accordion
  document.querySelectorAll('.faq-question').forEach(btn => {
    btn.addEventListener('click', function () {
      const item = this.closest('.faq-item');
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(el => {
        el.classList.remove('open');
        el.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
      });
      if (!isOpen) {
        item.classList.add('open');
        this.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // Smooth nav highlight on scroll (lightweight)
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        navLinks.forEach(a => {
          a.style.color = a.getAttribute('href') === '#' + e.target.id
            ? 'var(--white)' : '';
        });
      }
    });
  }, { threshold: 0.4 });
  sections.forEach(s => observer.observe(s));
</script>
</body>
</html>
