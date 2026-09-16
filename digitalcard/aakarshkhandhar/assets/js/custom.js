/*------------------------------------- Slider -------------------------------------*/
$('.testimonial-sec-bottom').slick({
  dots: true,
  arrows: false,
  infinite: false,
  autoplay:true,
  speed: 300,
  rows: 0 ,
  slidesToShow: 1,
  slidesToScroll: 1
});

$('.category-sec-bottom').slick({
  dots: true,
  arrows: false,
  infinite: false,
  autoplay:true,
  speed: 300,
  rows: 0 ,
  slidesToShow: 1,
  slidesToScroll: 1
});

$('.country-bottom').slick({
  dots: true,
  arrows: false,
  infinite: true,
  autoplay:true,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1
});

/*------------------------------------- Preloader -------------------------------------*/
$(window).on("load", function() {
  $('.preloader').delay(1000).fadeOut(800); 
});

/*------------------------------------- Scanner Img Download -------------------------------------*/
function downloadImage() {
  const imagePath = 'assets/img/aakarsh-khandhar.png';
  const fileName = 'pankaj-qrcode.png';
  const link = document.createElement('a');
  link.href = imagePath;
  link.download = fileName;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
}
/*------------------------------------- Share Scanner Img -------------------------------------*/
function shareImage() {
  const imageUrl = window.location.origin + '/digitalcard/aakarshkhandhar/assets/img/aakarsh-khandhar.png';
  const title = 'Share Scanner Image';
  const text = 'Check out this link!';
  if (navigator.share) {
    navigator.share({
      title: title,
      text: text,
      url: imageUrl
    }).then(() => {
      console.log('Image shared successfully.');
    }).catch((error) => {
      console.error('Error sharing image:', error);
    });
  } else {
    alert('Sharing is not supported on this device.');
  }
}

/*------------------------------------- Save Contact -------------------------------------*/
function escapeVCardValue(value) {
  return String(value || '')
    .replace(/\\/g, '\\\\')
    .replace(/\n/g, '\\n')
    .replace(/;/g, '\\;')
    .replace(/,/g, '\\,');
}

function buildVCard(contact) {
  const lines = [
    'BEGIN:VCARD',
    'VERSION:3.0',
    `N:${escapeVCardValue(contact.lastName)};${escapeVCardValue(contact.firstName)};;;`,
    `FN:${escapeVCardValue(contact.fullName)}`,
  ];

  if (contact.company) {
    lines.push(`ORG:${escapeVCardValue(contact.company)}`);
  }

  if (contact.title) {
    lines.push(`TITLE:${escapeVCardValue(contact.title)}`);
  }

  if (contact.phone) {
    lines.push(`TEL;TYPE=CELL,VOICE:${escapeVCardValue(contact.phone)}`);
  }

  if (contact.workPhone) {
    lines.push(`TEL;TYPE=WORK,VOICE:${escapeVCardValue(contact.workPhone)}`);
  }

  if (contact.email) {
    lines.push(`EMAIL;TYPE=INTERNET,WORK:${escapeVCardValue(contact.email)}`);
  }

  if (contact.website) {
    lines.push(`URL:${escapeVCardValue(contact.website)}`);
  }

  if (contact.address || contact.city || contact.region || contact.postalCode || contact.country) {
    lines.push(
      `ADR;TYPE=WORK:;;${escapeVCardValue(contact.address)};${escapeVCardValue(contact.city)};${escapeVCardValue(contact.region)};${escapeVCardValue(contact.postalCode)};${escapeVCardValue(contact.country)}`
    );
  }

  lines.push('END:VCARD');

  return `${lines.join('\r\n')}\r\n`;
}

function getContactDetails(button) {
  const {
    fullName = '',
    firstName = '',
    lastName = '',
    phone = '',
    workPhone = '',
    email = '',
    company = '',
    title = '',
    website = '',
    address = '',
    city = '',
    region = '',
    postalCode = '',
    country = '',
  } = button.dataset;

  const nameParts = fullName.trim().split(/\s+/).filter(Boolean);

  return {
    fullName: fullName.trim(),
    firstName: firstName.trim() || nameParts.slice(0, -1).join(' ') || nameParts[0] || '',
    lastName: lastName.trim() || nameParts.slice(-1)[0] || '',
    phone: phone.trim(),
    workPhone: workPhone.trim(),
    email: email.trim(),
    company: company.trim(),
    title: title.trim(),
    website: website.trim(),
    address: address.trim(),
    city: city.trim(),
    region: region.trim(),
    postalCode: postalCode.trim(),
    country: country.trim(),
  };
}

function sanitizeFileName(name) {
  return String(name || 'contact')
    .toLowerCase()
    .replace(/[^a-z0-9]+/g, '-')
    .replace(/^-+|-+$/g, '');
}

function isIOSDevice() {
  return /iPad|iPhone|iPod/.test(navigator.userAgent) ||
    (navigator.platform === 'MacIntel' && navigator.maxTouchPoints > 1);
}

function triggerVCardDownload(vCardContent, fileName) {
  const blob = new Blob([vCardContent], { type: 'text/vcard;charset=utf-8' });

  if (window.navigator.msSaveOrOpenBlob) {
    window.navigator.msSaveOrOpenBlob(blob, fileName);
    return;
  }

  if (isIOSDevice()) {
    const reader = new FileReader();
    reader.onloadend = function () {
      window.location.href = reader.result;
    };
    reader.readAsDataURL(blob);
    return;
  }

  const fileUrl = URL.createObjectURL(blob);
  const link = document.createElement('a');
  link.href = fileUrl;
  link.download = fileName;
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);

  window.setTimeout(function () {
    URL.revokeObjectURL(fileUrl);
  }, 1000);
}

function handleSaveContact(event) {
  const button = event.currentTarget;
  const contact = getContactDetails(button);
  const fileBaseName = sanitizeFileName(contact.fullName) || 'contact';
  const fileName = `${fileBaseName}.vcf`;
  const vCardContent = buildVCard(contact);

  triggerVCardDownload(vCardContent, fileName);
}

const saveContactButton = document.getElementById('save-contact-btn');

if (saveContactButton) {
  saveContactButton.addEventListener('click', handleSaveContact);
}
