<div class="jumbotron jumbotron-fluid bg-light">
    <div class="container-fluid">
        <h1><?= __('My Dashboard') ?></h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-4 py-2">
        <div class="card h-100 text-white bg-secondary">
            <div class="card-body">
                <h3 class="card-title">Mitglieder</h3>
                <p class="card-text">Hier verwalten Sie Ihre Mitglieder.</p>
                <a href="/users/index" class="btn btn-outline-light">Mitgliederverwaltung</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 py-2">
        <div class="card h-100 border-primary">
            <div class="card-body">
                <h3 class="card-title">Abteilungen</h3>
                <p class="card-text">Hier verwalten Sie Ihre Abteilungen.</p>
                <a href="/departments/index" class="btn btn-outline-secondary">Abteilungsverwaltung</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4 py-2">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h3 class="card-title">Beiträge</h3>
                <p class="card-text">Hier verwalten Sie Ihre Beiträge.</p>
                <a href="/prices/index" class="btn btn-outline-light">Beitragsverwaltung</a>
            </div>
        </div>
    </div>
</div>
