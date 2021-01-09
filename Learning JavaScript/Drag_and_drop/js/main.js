const list_items = document.querySelectorAll('.list-item');
const lists = document.querySelectorAll('.list');

let draggedItem = null;

for (let i = 0; i < list_items.length; i++) { 
    let item = list_items[i];

    item.addEventListener('dragstart', function () {
        console.log('dragstart')
        draggedItem = item;
        setTimeout(function () {
            item.style.display = 'none';
        }, 0)
    }); 

    item.addEventListener('dragend', function () {
        console.log('dragend')
        setTimeout(function () { 
            draggedItem.style.display = 'block';
            draggedItem = null;
        }, 0)
    });

    for (let j = 0; j < lists.length; j++) { 
        const list = lists[j];

        list.addEventListener('dragover', function (e) {
            e.preventDefault();
        })

        list.addEventListener('dragenter', function (e) {
            e.preventDefault();
            this.style.backgroundColor = 'rgb(60, 60, 60)';
        })

        list.addEventListener('dragleave', function (e) {
            e.preventDefault();
            this.style.backgroundColor =  'rgb(53, 53, 53)';
        })

        list.addEventListener('drop', function() {
            this.append(draggedItem);
            this.style.backgroundColor =  'rgb(53, 53, 53)';
        })
    }
}