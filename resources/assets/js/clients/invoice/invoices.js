$(document).ready(function () {
    'use strict';

    $('#clientSelectBox,#discountTypeSelect').select2({
        width: '100%',
    });

    $('.projects-select-box').select2({
        width: '100%',
    });

    $('.task-select-box').select2({
        width: '100%',
    });

    $('.tax-select-box').select2({
        width: '100%',
    });
    $('#filter_status,#due_date_filter').select2();

    $(document).on('change', '#filter_status', function () {
        window.livewire.emit('filterTasksByStatus', $(this).val());
    });

    $(document).on('change', '#due_date_filter', function () {
        window.livewire.emit('filterDueDate', $(this).val());
    });

    $(document).
        on('click',' #markAsSent, #markAsPaid', function () {
            let invoiceStatus = $(this).data('status');
            $.ajax({
                url: route('invoices.change-status',changeInvoiceStatus),
                type: 'post',
                data: { 'invoiceStatus': invoiceStatus },
                success: function (result) {
                    if (result.success) {
                        window.location.href = invoiceId;
                        displaySuccessMessage(result.message);
                    }
                },
                error: function (result) {
                    displayErrorMessage(result.responseJSON.message);
                },
            });
        });
});
