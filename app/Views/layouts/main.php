<!DOCTYPE html>
<html lang="<?= $lang ?? 'pt' ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'ConstrucaoMz' ?></title>

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind Config -->
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: '#142B6F',
              accent:  '#FFD601',
              light:   '#E1DEE6',
            },
            fontFamily: {
              hero: ['"Open Sans Condensed"', 'sans-serif'],
              body: ['"Inter"', 'sans-serif'],
            }
          }
        }
      }
    </script>

    <style>
      body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-white text-gray-800">

    <?= view('partials/header', ['lang' => $lang ?? 'pt']) ?>

    <main>
        <?= view($page, ['lang' => $lang ?? 'pt']) ?>
    </main>

    <?= view('partials/footer', ['lang' => $lang ?? 'pt']) ?>

</body>
</html>