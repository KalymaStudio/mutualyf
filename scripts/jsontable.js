function createTableFromJSON( jsonObj, tableClass ) {

        // EXTRACT VALUE FOR HTML HEADER.
        var col = [];
        for (var i = 0; i < jsonObj.length; i++) {
            for (var key in jsonObj[i]) {
                if (col.indexOf(key) === -1) {
                    col.push(key);
                }
            }
        }

        // CREATE DYNAMIC TABLE.
        var table = document.createElement("table");

        // ADD CLASS
        table.className = tableClass;

        // CREATE HTML TABLE HEADER ROW USING THE EXTRACTED HEADERS ABOVE.
        var tr = table.insertRow(-1);                   // TABLE ROW.

        for (var i = 0; i < col.length; i++) {
            var th = document.createElement("th");      // TABLE HEADER.
            th.innerHTML = col[i];
            tr.appendChild(th);
        }

        // ADD JSON DATA TO THE TABLE AS ROWS.
        for (var i = 0; i < jsonObj.length; i++) {

            tr = table.insertRow(-1);

            if( i % 2)
              tr.addClass = "odd";
            else
              tr.addClass = "even";

            for (var j = 0; j < col.length; j++) {
                var tabCell = tr.insertCell(-1);
                tabCell.innerHTML = jsonObj[i][col[j]];
            }
        }

        // FINALLY ADD THE NEWLY CREATED TABLE WITH JSON DATA TO A CONTAINER.
        /*var divContainer = document.getElementById(container);
        divContainer.innerHTML = "";
        divContainer.appendChild(table);
*/
        return table;
    }
