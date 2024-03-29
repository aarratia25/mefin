<!-- Pop Out Block Modal -->
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="{{ $id }}" aria-hidden="true">
   <div {{ $attributes->merge(['class' => 'modal-dialog']) }} role="document">
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
               {{ $slot }}
            </div>
         </div>
      </div>
   </div>
</div>
<!-- END Pop Out Block Modal -->