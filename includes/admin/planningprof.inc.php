<?php require './includes/header.php'; ?>
    <input type="date" min="2022-01-01" max="2025-01-01">
            <!--/Table Liste Professeur-->
            <table>
              <thead>
                <tr>
                  <th id="nomTable" colspan="7">Planning (Nom Professeur)</th>
                </tr>
                <tr>
                </tr>
                
               </div>
              <tr id="titreTable">
                <th>Matiere</th>
                <th>Date</th>
                <th>Horaires</th>
                <th>Salles</th>
                <th>Promotions</th>
                <th>Ecoles</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Maths</td>
                <td>11/05/2022</td>
                <td>17:30 - 19:00</td>
                <td>306</td>
                <td>CM2</td>
                <td>Ecole 00</td>
                <td>
                  <i class="fa-solid fa-pen"></i>
                  <i class="fa-solid fa-trash"></i>
                </td>
              </tr>
      
              <tr>
                <td>Anglais</td>
                <td>12/05/2022</td>
                <td>16:30 - 17:30</td>
                <td>PEUPLIER</td>
                <td>CEPPIC2022</td>
                <td>Ecole 2</td>
                <td>
                  <i class="fa-solid fa-pen"></i>
                  <i class="fa-solid fa-trash"></i>
                </td>
              </tr>
      
              <tr>
                <td>Histoire</td>
                <td>13/05/2022</td>
                <td>13:00 - 14:00</td>
                <td>ERABLE</td>
                <td>CEPPIC2022</td>
                <td>Ecole 3</td>
                <td>
                  <i class="fa-solid fa-pen"></i>
                  <i class="fa-solid fa-trash"></i>
                </td>
              </tr>
            </tbody>
            <tfoot>
              <tr >
                <td  colspan="7">
                  <div id="footTable">
                    <div
                    data-pagination=""
                    data-num-pages="numPages()"
                    data-current-page="currentPage"
                    data-max-size="maxSize"
                    data-boundary-links="true"
                  > </div>
                  <button id="buttonTable" type="button"> Ajouter un cours </button></div>
                </td>
              </tr>
            </tfoot>
            </table> 

