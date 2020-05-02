<!-- Pop Out Block Modal -->
<div class="modal fade" id="user-id-popout" tabindex="-1" role="dialog" aria-labelledby="user-id-popout" aria-hidden="true">
   <div class="modal-dialog modal-dialog-popout" role="document">
      <div class="modal-content">
         <div class="block block-themed block-transparent mb-0">
            <div class="block-header bg-primary-dark">
                  <h3 class="block-title">
                     {{ $title }} <span id="title-modal"></span>
                  </h3>
                  <div class="block-options">
                     <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-fw fa-times"></i>
                     </button>
                  </div>
            </div>
            <div class="block-content">
               {{ $content }}
            </div>
         </div>
      </div>
   </div>
</div>
<!-- END Pop Out Block Modal -->