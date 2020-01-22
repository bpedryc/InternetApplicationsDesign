 <div id="tea-modal" class="modal fade container">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h4 class="mb-3">Add a new tea</h4>
                 <button type="button" class="close" data-dismiss="modal" aria-label>
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>

             <form>
                 <div class="modal-body">
                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="tea-name">Name</label>
                             <input type="text" class="form-control" id="tea-name">
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="tea-type">Type</label>
                             <select class="form-control" id="tea-type">
                                 <option>Black Tea</option>
                                 <option>Green Tea</option>
                                 <option>Oolong Tea</option>
                                 <option>PuErh Tea</option>
                                 <option>White Tea</option>
                                 <option>Yellow Tea</option>
                             </select>
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="tea-temperature">Temperature</label>
                             <div class="d-flex">
                                 <input type="range" min="0" max="99" value="0" class="custom-range" id="tea-temperature">
                                 <p class="current-temp ml-4 mr-2">1</p>
                             </div>
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-6">
                             <input type="number" min="0" class="form-control mr-2" id="tea-time-minutes" placeholder="Minutes">
                         </div>
                         <div class="form-group col-6">
                             <input type="number" min="0" max="59" class="form-control ml-2" id="tea-time-seconds" placeholder="Seconds">
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="tea-proportions">Proportions per 100ml</label>
                             <div class="d-flex">
                                 <input type="number" class="form-control" id="tea-proportions" min="0" step="0.1">
                                 <p class="m-2">g</p>
                             </div>
                         </div>
                     </div>

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="tea-notes">Notes</label>
                             <textarea class="form-control" id="tea-notes" rows="3"></textarea>
                         </div>
                     </div>
                 </div>

                 <div class="modal-footer">
                     <button class="btn btn-success" type="button" onclick="addTea()">
                         Add to collection
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>