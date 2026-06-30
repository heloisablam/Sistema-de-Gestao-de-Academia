<?php
   class PagamentoCartao implements FormaPagamento {
    public function pagar()
    {
        return "Pagamento via Cartão";
    }
}