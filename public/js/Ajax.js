class MyAjax {
    constructor(token) {
        this.token = token;
    }

    getAdat(apiVegpont, tomb, callback) {
        $.ajax({
            url: apiVegpont,
            type: "GET",
            success: function (result) {
                tomb.splice(0, tomb.length);
                result.forEach((value) => {
                    tomb.push(value);
                });

                callback(tomb);
            },
        });
    }

 
}