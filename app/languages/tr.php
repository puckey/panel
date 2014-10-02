<?php

return array(
  'title' => 'Türkçe',
  'author' => 'Levent Usta <aristotheme@gmail.com>',
  'version' => '1.0.0',
  'data' => array(

    // global
    'cancel' => 'İptal',
    'add' => 'Oluştur',
    'save' => 'Kaydet',
    'saved' => 'Kaydedildi!',
    'delete' => 'Sil',
    'insert' => 'Ekle',
    'ok' => 'Tamam',

    // options (sidebar)
    'options.show' => 'Show options',
    'options.hide' => 'Hide options',

    // installation
    'installation' => 'Kurulum',
    'installation.check.headline' => 'Kirby Panel Kurulumu',
    'installation.check.text' => 'Kirby kurulum aşamasında belirtilen sorunla karşılaştı…',
    'installation.check.retry' => 'Tekrar Dene',
    'installation.check.error' => 'Bazı sorunlar mevcut!',
    'installation.check.error.accounts' => '/site/accounts klasörü yazılabilir değil',
    'installation.check.error.avatars' => '/assets/avatars klasörü yazılabilir değil',
    'installation.check.error.blueprints' => 'Lütfen şu klasörü oluştur : /site/blueprints',
    'installation.check.error.content' => 'Content adındaki klasör ve içindeki tüm klasörler, dosyalar yazılabilir olmalı.',
    'installation.check.error.thumbs' => 'thumb klasörü yazılabilir olmalı',
    'installation.signup.username.label' => 'İlk hesabını oluştur',
    'installation.signup.username.placeholder' => 'Kullanıcı Adı',
    'installation.signup.email.label' => 'E-Posta',
    'installation.signup.email.placeholder' => 'eposta@ornek.com',
    'installation.signup.password.label' => 'Şifre',
    'installation.signup.language.label' => 'Dil',
    'installation.signup.button' => 'Hesabını oluştur',

    // login
    'login' => 'Giriş',
    'login.welcome' => 'Lütfen yeni hesabın ile giriş yap',
    'login.username.label' => 'Kullanıcı Adı',
    'login.password.label' => 'Şifre',
    'login.error' => 'Geçersiz kullanıcı adı veya şifre',
    'login.button' => 'Giriş Yap',

    // logout
    'logout' => 'Çıkış Yap',

    // dashboard
    'dashboard' => 'Kontrol Paneli',
    'dashboard.index.pages.title' => 'Sayfalar',
    'dashboard.index.pages.add' => 'Oluştur',
    'dashboard.index.site.title' => 'Website Adresi',
    'dashboard.index.account.title' => 'Hesap Bilgilerin',
    'dashboard.index.account.edit' => 'Düzenle',
    'dashboard.index.metatags.title' => 'Anahtar Kelimeler',
    'dashboard.index.metatags.edit' => 'Düzenle',
    'dashboard.index.history.title' => 'Son güncellemelerin',
    'dashboard.index.history.text' => 'Son güncellemelerin, daha sonra tekrar kolayca bulabilmen için burada görünecek.',

    // metatags
    'metatags' => 'Anahtar Kelimeler',
    'metatags.back' => 'Kontrol paneline geri dön',

    // pages
    'pages.show.settings' => 'Sayfa ayarları',
    'pages.show.preview' => 'Önizlemeyi aç',
    'pages.show.changeurl' => 'Web adresini değiştir',
    'pages.show.delete' => 'Bu sayfayı sil',
    'pages.show.subpages.title' => 'Alt sayfalar',
    'pages.show.subpages.add' => 'Oluştur',
    'pages.show.subpages.empty' => 'Bu sayfanın şu an bir alt sayfası yok.',
    'pages.show.files.title' => 'Dosyalar',
    'pages.show.files.add' => 'Oluştur',
    'pages.show.files.empty' => 'Bu sayfanın şu an bir dosyası yok',
    'pages.show.error.permissions.title' => 'Sayfa yazılabilir değil',
    'pages.show.error.permissions.text'  => 'Lütfen content klasörünün ve içindekilerinin izin yapılandırmasını kontrol ediniz.',
    'pages.show.error.permissions.retry'  => 'Tekrar Dene',
    'pages.show.error.form'  => 'Lütfen gerekli tüm alanları doğru bir şekilde doldurunuz',

    'pages.add.title.label' => 'Yeni bir alt sayfa oluştur',
    'pages.add.title.placeholder' => 'Başlık',
    'pages.add.url.label' => 'Web Adres-uzantısı',
    'pages.add.url.enter' => '(bir başlık yaz)',
    'pages.add.url.close' => 'Kapat',
    'pages.add.url.help' => 'İzin verilen karakterler: a-z küçük harfler, 0-9 ve normal kesik çizgiler',
    'pages.add.template.label' => 'Şablon',
    'pages.add.error.title' => 'Başlık bulunamadı',
    'pages.add.error.template' => 'Şablon bulunamadı',
    'pages.add.error.max.headline' => 'Yeni sayfalar oluşturmaya izin verilmedi',
    'pages.add.error.max.text' => 'Mevcut sayfa sahip olabilecek maksimum alt sayfa sayısına erişti.',
    'pages.url.uid.label' => 'Web Adres-uzantısı',
    'pages.url.uid.label.option' => 'Başlıktan oluştur',
    'pages.url.error.exists' => 'Bir sayfa hali hazırda aynı web adres-uzantısına sahip',
    'pages.url.error.move' => 'Web adres-uzantısı değiştirilemedi',
    'pages.delete.headline' => 'Bu sayfayı silmek istediğinizden emin misiniz?',
    'pages.delete.error.home.headline' => 'Anasayfa silinemez',
    'pages.delete.error.home.text' => 'Anasayfayı silmeyi deniyorsunuz. Fakat bu mümkün değil, çünkü istenilmeyen etkilere neden olur.',
    'pages.delete.error.error.headline' => 'Hata sayfası silinemedi',
    'pages.delete.error.error.text' => 'Hata sayfasını silmeyi deniyorsunuz. Fakat bu mümkün değil, çünkü istenilmeyen etkilere neden olur.',
    'pages.delete.error.children.headline' => 'Bu sayfa silinemedi',
    'pages.delete.error.children.text' => 'Bu sayfa alt sayfalara sahip olduğundan dolayı silinemdi. Lütfen önce bu sayfanın alt sayfalarını siliniz.',
    'pages.delete.error.blocked.headline' => 'Bu sayfa silinemedi',
    'pages.delete.error.blocked.text' => 'Bu sayfa kilitli ve silinemez.',
    'pages.search.help' => 'Sayfaları web adres uzantılarına göre arayınız. Arama sonuçlarından istediğiniz sayfayı klavyenizin yukarı ve aşağı tuşları ile seçip enter tuşuna bastıktan sonra aradığınız sayfaya direk yönleneceksiniz.',
    'pages.search.noresults' => 'Herhangi bir sonuç bulunamadı. Lütfen farklı bir web adres-uzantısı ismi deneyiniz.',
    'pages.error.missing' => 'Sayfa bulunamadı',

    // subpages
    'subpages' => 'Alt Sayfalar',
    'subpages.index.headline' => 'Alt Sayfalar:',
    'subpages.index.back' => 'Geri',
    'subpages.index.add' => 'Yeni bir alt sayfa oluştur',
    'subpages.index.add.first.text' => 'Bu sayfanın henüz bir alt sayfası yok',
    'subpages.index.add.first.button' => 'İlk alt sayfanı oluştur',
    'subpages.index.visible' => 'Websitesinde gösterilecek alt sayfalar',
    'subpages.index.visible.help' => 'Buraya websitesinde gösterilecek alt sayfaları sürükleyip bırakabilirsiniz.',
    'subpages.index.invisible' => 'Websitesinden gizlenecek alt sayfalar',
    'subpages.index.invisible.help' => 'Buraya websitesinden gizlenecek alt sayfaları sürükleyip bırakabilirsiniz.',
    'subpages.error.missing' => 'Sayfa bulunamadı',

    // files
    'files' => 'Dosyalar',
    'files.index.headline' => 'Dosyalar:',
    'files.index.back' => 'Geri',
    'files.index.upload' => 'Yeni bir dosya yükle',
    'files.index.upload.first.text' => 'Bu sayfanın henüz bir dosyası yok',
    'files.index.upload.first.button' => 'İlk dosyayı yükle',
    'files.index.edit' => 'Düzenle',
    'files.index.delete' => 'Sil',
    'files.show.name.label' => 'Dosya İsmi',
    'files.show.info.label' => 'Dosya Formatı / Büyüklüğü / Boyutları',
    'files.show.link.label' => 'Dosyanın Web Adres Uzantısı',
    'files.show.open' => 'Göster/indir',
    'files.show.back' => 'Geri',
    'files.show.replace' => 'Değiştir',
    'files.show.delete' => 'Sil',
    'files.show.error.rename' => 'Dosya ismi yeniden adlandırılamadı',
    'files.show.error.form' => 'Lütfen gerekli tüm alanları doğru bir şekilde doldurunuz',
    'files.upload.drop' => 'Dosyaları buraya sürükle bırak…',
    'files.upload.click' => '…veya cihazından başka bir dosya yüklemek için buraya tıkla',
    'files.replace.drop' => 'Buraya bir dosya sürükle bırak…',
    'files.replace.click' => '…veya cihazındaki başka bir dosya ile değiştirmek için buraya tıkla',
    'files.replace.error.type' => 'Yüklenecek dosyalar aynı dosya formatında olmalı',
    'files.delete.headline' => 'Bu dosyayı silmek istediğinizden emin misiniz?',
    'files.error.missing.page' => 'Sayfa bulunamadı',
    'files.error.missing.file' => 'Dosya bulunamadı',

    // users
    'users' => 'Kullanıcılar',
    'users.index.headline' => 'Bütün kullanıcılar',
    'users.index.add' => 'Yeni bir kullanıcı ekle',
    'users.index.edit' => 'Düzenle',
    'users.index.delete' => 'Sil',
    'users.form.username.label' => 'Kullanıcı Adı',
    'users.form.username.placeholder' => 'Kullanıcı adı seç',
    'users.form.username.help' => 'İzin verilen karakterler: a-z küçük harfler, 0-9 ve normal kesik çizgiler',
    'users.form.username.readonly' => 'Kullancı adı değiştirilemez',
    'users.form.firstname.label' => 'Ad',
    'users.form.lastname.label' => 'Soyad',
    'users.form.email.label' => 'E-Posta',
    'users.form.email.placeholder' => 'eposta@ornek.com',
    'users.form.password.label' => 'Şifre',
    'users.form.password.confirm.label' => 'Şifre Tekrarı',
    'users.form.password.new.label' => 'Yeni Şifre',
    'users.form.password.new.confirm.label' => 'Yeni şifre tekrarı',
    'users.form.password.new.help' => 'Mevcut şifreyi boş bırak',
    'users.form.language.label' => 'Dil',
    'users.form.options.headline' => 'Kullanıcı Ayarları',
    'users.form.options.message' => 'E-Posta gönder',
    'users.form.options.delete' => 'Bu hesabı sil',
    'users.form.avatar.headline' => 'Profil resmi',
    'users.form.avatar.upload' => 'Profil resmi yükle',
    'users.form.avatar.replace' => 'Profil resmini değiştir',
    'users.form.avatar.delete' => 'Profil resmini sil',
    'users.form.back' => 'Kullanıcılar paneline geri dön',
    'users.form.error.password.confirm' => 'Lütfen şifreyi doğrulayın',
    'users.form.error.update' => 'Kullanıcı güncellenemedi',
    'users.form.error.create' => 'Kullanıcı oluşturulamadı',
    'users.form.error.permissions.title' => 'Account klasörü yazılabilir değil',
    'users.form.error.permissions.text' => 'Lütfen /site/accounts klasörünün mevcut olduğundan ve yazılabilir olduğundan emin olun.',
    'users.delete.headline' => 'Bu kullanıcıyı silmek istediğinizden emin misiniz?',
    'users.delete.error' => 'Kullanıcı silinemedi',
    'users.avatar.drop' => 'Buraya bir profil resmi sürükle bırak…',
    'users.avatar.click' => '…veya cihazından başka bir profil resmi yüklemek için buraya tıkla',
    'users.avatar.error.type' => 'Sadece JPG, PNG and GIF formatındaki dosyaları yükleyebilirsin',
    'users.avatar.error.folder.headline' => 'Avatar klasörü yazılabilir değil',
    'users.avatar.error.folder.text' => 'Lütfen <strong>/assets/avatars</strong> adlı klasör oluştur ve profil resmini yükleyebilmek için yazılabilir izni ver.',
    'users.avatar.delete.error' => 'Profil resmi silinemedi',
    'users.avatar.delete.success' => 'Profil resmi silindi',
    'users.error.missing' => 'Kullanıcı bulunamadı',

    // form fields
    'fields.required' => 'Mecburi',
    'fields.date.label' => 'Tarih',
    'fields.date.months' => array(
      'Ocak',
      'Şubat',
      'Mart',
      'Nisan',
      'Mayıs',
      'Haziran',
      'Temmuz',
      'Ağustos',
      'Eylül',
      'Ekim',
      'Kasım',
      'Aralık'
    ),
    'fields.date.weekdays' => array(
      'Pazar',
      'Pazartesi',
      'Salı',
      'Çarşamba',
      'Perşembe',
      'Cuma',
      'Cumartesi'
    ),
    'fields.date.weekdays.short' => array(
      'Paz',
      'Pzrt',
      'Sal',
      'Çar',
      'Per',
      'Cu',
      'Cum'
    ),
    'fields.email.label' => 'E-Posta',
    'fields.email.placeholder' => 'eposta@ornek.com',
    'fields.number.label' => 'Numara',
    'fields.number.placeholder' => '#',
    'fields.page.label' => 'Sayfa',
    'fields.page.placeholder' => 'adres/yolu/sayfa',
    'fields.password.label' => 'Şifre',
    'fields.structure.add' => 'Oluştur',
    'fields.structure.add.first' => 'İlk girdini oluştur',
    'fields.structure.empty' => 'Henüz bir girdi yok.',
    'fields.structure.cancel' => 'İptal',
    'fields.structure.save' => 'Kaydet',
    'fields.structure.edit' => 'Düzenle',
    'fields.structure.delete' => 'Sil',
    'fields.tags.label' => 'Anahtar Kelimeler',
    'fields.tel.label' => 'Telefon',
    'fields.textarea.buttons.bold.label' => 'Kalın yazı',
    'fields.textarea.buttons.bold.text' => 'Kalın yazı',
    'fields.textarea.buttons.italic.label' => 'Eğik yazı',
    'fields.textarea.buttons.italic.text' => 'Eğik yazı',
    'fields.textarea.buttons.link.label' => 'Bağlantı',
    'fields.textarea.buttons.email.label' => 'E-Posta',
    'fields.textarea.buttons.image.label' => 'Resim',
    'fields.textarea.buttons.file.label' => 'Dosya',
    'fields.toggle.yes' => 'Evet',
    'fields.toggle.no' => 'Hayır',
    'fields.toggle.on' => 'Açık',
    'fields.toggle.off' => 'Kapalı',

    // textarea overlays
    'editor.link.url.label' => 'Web Adresi Ekle',
    'editor.link.text.label' => 'Bağlantı yazısı',
    'editor.link.text.help' => 'Bağlantı yazısı isteğe bağlı',
    'editor.email.address.label' => 'E-Posta Adresi Ekle',
    'editor.email.address.placeholder' => 'eposta@ornek.com',
    'editor.email.text.label' => 'Bağlantı yazısı',
    'editor.email.text.help' => 'Bağlantı yazısı isteğe bağlı',
    'editor.file.empty' => 'Bu sayfanın henüz bir dosyası yok',
    'editor.image.empty' => 'Bu sayfanın henüz bir resmi yok',

    // error page
    'error' => 'Hata',
    'error.headline' => 'Hata',

  )
);
