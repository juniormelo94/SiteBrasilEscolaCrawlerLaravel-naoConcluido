@yield('templateHead')

@yield('templateBody')
    <!-- Modal Mensagens -->
	    <div class="modal fade" id="modalMenu" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
	      <div class="modal-dialog modal-dialog-centered max-width" role="document">
	        <div class="modal-content">
	          <div class="modal-header">
	            <h5 class="modal-title" id="TituloModalCentralizado">Menu Site Brasil Escola</h5>
	            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
	              <span aria-hidden="true">&times;</span>
	            </button>
	          </div>
	          <div class="modal-body">
				<!-- Mensagens. -->
	          </div>
	          <div class="modal-footer">
	            <button type="button" class="btn btn-secondary" data-dismiss="modal">     Fechar  
	            </button>
	          </div>
	        </div>
	      </div>
	    </div>
@yield('templateFooter')