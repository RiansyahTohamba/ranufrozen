// dashboard.js
$(function () {
    var products = [
        {
            id: '1',
            price: 'Rp 30.000',
            photoPath: 'breakfast_item.jpg',
            name: 'Nugget Asam Manis',
            stock: 4,
            desc: 'Rasa asam manis nya bikin nyam nyam',
        },
        {
            id: '2',
            price: 'Rp 50.000',
            photoPath: 'lunch_item.jpg',
            name: 'Nugget Karage',
            stock: 0,
            desc: 'Enak sekali loh coba saja beli nyam nyam',
        },
        {
            id: '3',
            price: 'Rp 25.000',
            photoPath: 'dinner_item.jpg',
            name: 'Sayap Ayam',
            stock: 1,
            desc: 'Sayap sayap patah',
        },
    ];

    let row = '';
 // <input class="form-check-input" type="checkbox" id="row1" name="row-check" value="Lavina Cassin">
 //                    <label class="form-check-label" for="row1">Kue</label>

    $.each(products, function(j, e) {
        row +='<tr> <td>';
        row +='<input class="form-check-input" type="checkbox" id="'+e.id+'" name="row-check" value="'+e.id+'"/> <label class="form-check-label" for="'+e.id+'"> '+e.name+' </label> </td>';
        row +='<td>'+e.price+'</td><td>'+e.stock+'</td></tr>';

        console.log(e.name);
    });

    $('#item-table tbody').append(row);

    // Header Master Checkbox Event
    $("#masterCheck").on("click", function () {
        if ($("input:checkbox").prop("checked")) {
            $("input:checkbox[name='row-check']").prop("checked", true);
        } else {
            $("input:checkbox[name='row-check']").prop("checked", false);
        }
    });

    // Check event on each table row checkbox
    $("input:checkbox[name='row-check']").on("change", function () {
        var total_check_boxes = $("input:checkbox[name='row-check']").length;
        var total_checked_boxes = $("input:checkbox[name='row-check']:checked").length;

        // If all checked manually then check master checkbox
        if (total_check_boxes === total_checked_boxes) {
            $("#masterCheck").prop("checked", true);
        }
        else {
            $("#masterCheck").prop("checked", false);
        }
    });

    // kode json nya disana
});