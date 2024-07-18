<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="includes/css/index.style.css">
    <title>Journal My Bible &#153</title>
</head>
<body>
    <main class="container">
        <section class="mt-5 mb-3">
            <div class="row">
                <h1 class="text-center my-3">Journal My Bible &#153</h1>
            </div>
            <div class="row">
                <h6 class="text-center fw-light">Olá Dave, bem vindo a mais um dia para leitura e meditação.</h6>
            </div>
        </section>

        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-auto">
                    <a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-dark fs-4 fw-semibold ">Journal!</a>
                </div>
                <div class="col-auto">
                    <a href="" class="link-dark link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-dark fs-4 fw-semibold">Journey</a>
                </div>
            </div>
        </section>

        <section>
            <div class="row my-4">
                <div class="col">
                    <label for="journalDate" class="form-label fw-semibold">Que dia é hoje?</label>
                    <input type="date" id="journalDate" class="form-control">
                </div>
                <div class="col">
                    <label for="journalVerse" class="form-label fw-semibold">Qual o versículo?</label>
                    <input type="text" id="journalVerse" class="form-control">
                </div>
            </div>

            <div class="row my-3">
                <div class="col">
                    <label for="journalBook" class="form-label fw-semibold">Qual devocional está usando?</label>
                    <input type="select" class="form-select">
                </div>
                <div class="col mt-4">
                    <button class="btn btn-light"><i class="bi bi-journal-plus"></i> Adicionar</button>
                </div>
            </div>

    <?php //Pensar isso em d-flex inline-block ou algo assim. Esses elementos funcionam através de um bloco e não podem ficar separados!?>
            <div class="row">
                <div class="col-auto">
                    <span class="fw-semibold">Pergunta aleatória do dia:</span>
                </div>
                <div class="col-auto">
                    <span class="fw-semibold">Pergunta #2</span>
                </div>
            </div>

            <div class="row">
                <div class="col-auto">
                    <span>"Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit,”</span>
                </div>
                <div class="col-auto">
                    <span>"Lorem ipsum dolor sit amet, <br> consectetur adipiscing elit,”</span>
                </div>
            </div>

            <div class="row mt-3">
                <span class="fw-semibold">Pergunta #3</span>
            </div>

            <div class="row">
                <div class="col">
                    <span>"Lorem ipsum dolor sit amet, consectetur adipiscing elit,”</span>
                </div>
            </div>

    <?php // Até aqui! ?>
        </section>
        

    </main>
</body>
</html>