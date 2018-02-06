import $ from 'jquery';
const list = $('#list'),
    page_size = 3,
    postStuff = $('.postStuff'),
    next = $('#next'),
    prev = $('#prev'),
    buttons = $('#buttons');
let posts = [],
    page_number = 0,
    blogs = [];

function fetchComments(id, span) {
    fetch('https://jsonplaceholder.typicode.com/comments?postId=' + id)
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Request failed!');
        }, networkError => console.log(networkError.message)
        ).then(json => {
            json.forEach(element => {
                $('<div>' +
                    '<h3>name: ' + element.name + '</h3>' +
                    '<h4>email: ' + element.email + '</h4>' +
                    '<h5>comment: ' + element.body + '</h5>' +
                    '</div>').appendTo(span);
            });
        });
}

function fetchPosts(id, username) {
    posts = [];
    fetch('https://jsonplaceholder.typicode.com/posts?userId=' + id)
        .then(response => {
            if (response.ok) {
                return response.json();
            }

            throw new Error('Request faied!');
        }, networkError => console.log(networkError.message)
        ).then(json => {
            postStuff.empty();
            list.empty();
            json.forEach(element => {
                posts.push(element);
            });
            $('#pageTitle').text(username);

            paginate(posts, page_size, page_number).forEach(displayPosts);

            if (posts.length > page_size) {
                next.prop('disabled', false);
                prev.prop('disabled', true);
                buttons.show();
            }
        });
}

function displayblogList(element) {
    $('<li> <h3>name: ' + element.username + '</h3>' +
        '<h4>website: ' + element.website + '</h4>' +
        '<h5>company info: name: ' + element.company.name + 'bs: ' + element.company.bs + 'catch phrase: ' + element.company.catchPhrase + '</h5> </li>').appendTo(list)
        .click(() => {
            page_number = 1;
            fetchPosts(element.id, element.username);
        });
}

function displayPosts(element) {
    $('<div>' +
        '<h3>' + element.title + '</h3>' +
        '<h4>' + element.body + '</h4>' +
        '<span class ="comments"> </span>' +
        '<button>show comments</button>' +
        '</div>').appendTo(postStuff)
        .data('postId', element.id);
}

function paginate(array, page_size, page_number) {
    --page_number; // because pages logically start with 1, but technically with 0
    return array.slice(page_number * page_size, (page_number + 1) * page_size);
}

fetch('https://jsonplaceholder.typicode.com/users')
    .then(response => {
        if (response.ok) {
            return response.json();
        }

        throw new Error('Request failed!');
    }, networkError => console.log(networkError.message)
    ).then(json => {
        json.forEach(element => {
            blogs.push(element);
            displayblogList(element);
        });
    });

next.click(function () {
    postStuff.empty();
    if ((page_number * page_size) < posts.length) {
        prev.prop('disabled', false);
        page_number++;
        paginate(posts, page_size, page_number).forEach(displayPosts);
    }
    if ((page_number * page_size) >= posts.length) {
        next.prop('disabled', true);
    }
});

prev.click(function () {
    postStuff.empty();
    if ((page_number * page_size) > 1) {
        next.prop('disabled', false);
        page_number--;
        paginate(posts, page_size, page_number).forEach(displayPosts);
    }
    if (page_number <= 1) {
        prev.prop('disabled', true);
    }
});

$('#homepageLink').click(function (event) {
    event.preventDefault();
    buttons.hide();
    postStuff.empty();
    list.empty();
    blogs.forEach(element => {
        displayblogList(element);
    });
    $('#pageTitle').text('Javascript Test');
});

postStuff.click(function (event) {
    if (event.target.nodeName === 'BUTTON') {
        var div = $(event.target).closest('div'),
            button = $(event.target).closest('button'),
            postId = div.data('postId'),
            comments = div.find('.comments');
        if (button.text() === 'show comments') {
            fetchComments(postId, comments);
            button.text('hide comments');
        }
        else {
            div.find('.comments').empty();
            button.text('show comments');
        }
    }
});