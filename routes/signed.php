<?php

Route::get('invoices/{invoice}', 'Portal\Invoices@signed')->name('signed.invoices.show');
Route::get('invoices/{invoice}/print', 'Portal\Invoices@printInvoice')->name('signed.invoices.print');
Route::get('invoices/{invoice}/pdf', 'Portal\Invoices@pdfInvoice')->name('signed.invoices.pdf');
Route::post('invoices/{invoice}/payment', 'Portal\Invoices@payment')->name('signed.invoices.payment');
Route::post('invoices/{invoice}/confirm', 'Portal\Invoices@confirm')->name('signed.invoices.confirm');
