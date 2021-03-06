const root = document.getElementById("root");
const jasonListAdd = document.getElementById("jason-list");
const firstNameInp = document.getElementById("firstnameinp");
const lastNameInp = document.getElementById("lastnameinp");

//   Get Crew List
fetch("http://localhost:8888/jason_list/jasoncrew.php")
    .then((response) => response.json())
    .then((data) => {
        const tableData = crewList(data);
        root.innerHTML = tableTemp(tableData);
    });

//Add Crew Member


const tableTemp = (html) => {
    return `<table>
                <tr>
                    <th>ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                </tr>
                    ${html}
                </table>
                `;
};

const crewList = (crewData) => {
    let table = "";
    crewData.forEach((el) => {
        table += "<tr class='border border-primary p-1' ><td class='border border-primary'>";
        table += el.crew_member.id;
        table += "</td>";
        table += "<td class='border border-primary p-1'>";
        table += el.crew_member.nom;
        table += "</td>";
        table += "<td class='border border-primary p-1'>";
        table += el.crew_member.prenom;
        table += "</td></tr>";
    });
    return table;
};