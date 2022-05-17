$(function() {
    const token=$('meta[name="csrf-token"]').attr('content');
    const ajax=new MyAjax(token);
    let tesztapiVegpont="http://localhost:8000/api/tesztek";
   
    let kategoriaVegpont="http://localhost:8000/api/kategoria";
     
    const kategoriaTomb=[];
    const tesztTomb=[];

    ajax.getAdat(tesztapiVegpont, tesztTomb, listazas);
    ajax.getAdat(kategoriaVegpont,kategoriaTomb, kategoriak);

    function listazas(tesztTomb) {
        const szuloElem = $(".tesztcontainer");
        const sablonElem = $("tesztkerdesek");
        szuloElem.empty();
        sablonElem.show();
        tesztTomb.forEach(function(elem) {
            let adat = sablonElem.clone().appendTo(szuloElem);
            const obj = new Teszt(adat, elem);

        });
        sablonElem.hide();

    }

       
    function kategoriak(kategoriaTomb){
        let option="";
        kategoriaTomb.forEach(function(elem){
            option="<option value='"+elem.id+"'>"+elem.kategorianev+"</option>";
            $("#kategoriak").append(option);
        });
    }




});

    