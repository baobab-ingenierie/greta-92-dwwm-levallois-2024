document.addEventListener(
    'DOMContentLoaded',
    function () {
        sayHello();
        showTeam();
    }
);

function sayHello() {
    let options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    let today = new Date();
    let curDate = today.toLocaleString('fr-FR', options);

    let h2 = document.createElement('h2');
    h2.innerHTML = 'Bonjour !<br>Nous sommes le ' + curDate + ' et nous vous souhaitons la bienvenue sur notre site web.';
    document.querySelector('#content').appendChild(h2);
}

function showTeam() {
    let pjm = [
        { 'fname': 'Priscilla', 'skills': ['Communication', 'Project manager'] },
        { 'fname': 'Sydney', 'skills': ['UX/UI', 'Product Owner'] },
        { 'fname': 'Fredson', 'skills': ['Data Stewart'] },
        { 'fname': 'Omar', 'skills': ['RH'] },
        { 'fname': 'Tenzin', 'skills': ['C#', 'React', 'MEAN'] }
    ];

    let dev = [
        { 'fname': 'Maryam', 'skills': 'Developer full stack' },
        { 'fname': 'Aurélien', 'skills': 'Developer full stack' },
        { 'fname': 'Duy Quang', 'skills': 'Developer full stack' },
        { 'fname': 'Stéphane', 'skills': 'Developer full stack' },
        { 'fname': 'Paolo', 'skills': 'Developer full stack' },
        { 'fname': 'Jérémy', 'skills': 'Developer full stack' },
        { 'fname': 'Nader', 'skills': 'Developer full stack' },
        { 'fname': 'Diari', 'skills': 'Developer full stack' }
    ];

    makeBlock(document.querySelector('#content'), 'Project Managers', pjm);
    makeBlock(document.querySelector('#content'), 'Developers', dev);
}

function makeBlock(parent, title, team) {
    console.log(team);
    parent.appendChild(document.createElement('h3')).innerHTML = title;

    let html = '';
    team.forEach(function (elt) {
        html += '<div class="card my-3" style="width: 15rem;"><img src="https://www.radiofrance.fr/s3/cruiser-production/2022/12/eebed2e8-abd5-4734-b887-e7ef24dc36c9/560x315_gettyimages-1019899574.jpg" class="card-img-top" alt="' + elt.fname + '"><div class="card-body"><h5 class="card-title">' + elt.fname + '</h5><p class="card-text">' + (Array.isArray(elt.skills) ? elt.skills.join(',') : elt.skills) + '</p><a href="#" class="btn btn-primary">plus d\'infos</a></div></div>';
    });
    let article = parent.appendChild(document.createElement('article'))
    article.className = 'd-flex flex-wrap justify-content-around';
    article.innerHTML = html;
}