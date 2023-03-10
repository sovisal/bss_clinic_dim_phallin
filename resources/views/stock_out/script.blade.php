<script src="{{ asset('js/dragula.min.js') }}"></script>
<script>
    const item = `<tr class="stock-out-item widget-todo-item"><td class="tw-py-3">${$('#stock-out-new-item').html()}</td></tr>`;
    if ($.trim($('#form-item-container').html()) == '') { 
        addStockOutForm();
    }
    redefine();
    function redefine() {
        // Redefine select2 and date-picker
        $('#form-item-container select').each((_i, e) => {
            $_this = $(e);
            if ($_this.data('url')) {
                $(e).select2({
                    width: "100%",
                    delay: 500,
                    ajax: {
                        url: $_this.data('url'),
                        dataType: 'json',
                        data: function (params) {
                            var query = {
                                _type : 'query',
                                term: params.term,
                                qty_remain: true
                            }
                            return query;
                        }
                    },
                });
                // $(e).on('select2:open', function (e) {
                //     if ($(this).find('option:selected').val() != '') {
                //         var $search = $(this).data('select2').dropdown.$search || $(this).data('select2').selection.$search;
                //         $search.val($(this).find('option:selected').text());
                //         $search.trigger('keyup');
                //     }
                // });
            } else {
                $(e).select2({
                    dropdownAutoWidth: !0,
                    width: "100%",
                    dropdownParent: $(e).parent()
                });
            }
        });
        $("#form-item-container .date-picker").datetimepicker({
            icons: {
                time: "bx bx-time",
                date: "bx bx-calendar",
                up: "bx bx-chevron-up",
                down: "bx bx-chevron-down",
                previous: "bx bx-chevron-left",
                next: "bx bx-chevron-right",
                today: "bx bx-screenshot",
                clear: "bx bx-trash",
                close: "bx bx-x",
            },
            format: "YYYY-MM-DD",
            showTodayButton: true,
        });
    }

    function addStockOutForm() {
        $('#form-item-container').append(item);
        redefine();
    }

    $(document).on('click', '#btn-add-stock-out', function () {
        addStockOutForm();
    });

    
    function calculateBaseQtyAndTotal($this_row){
        let price = bss_number($this_row.find('.price').val());
        let qty = bss_number($this_row.find('.qty').val());
        let pk_qty = bss_number($this_row.find('select.unit_id option:selected').data('qty'));
        $this_row.find('[name="qty_based[]"],[name="qty_based"]').val(qty * (pk_qty==0 ? 1 : pk_qty));
        $this_row.find('[name="total[]"],[name="total"]').val(qty * price);
    }

    $(document).on('change', '[name="supplier_id[]"],[name="supplier_id"]', function () {
        const $this_row = $(this).closest('table.table-stock-out-item');
        $this_row.find('[name="product_id[]"],[name="product_id"]').html('<option value="">---- None ----</option>').prop('disabled', true);
        $this_row.find('[name="unit_id[]"],[name="unit_id"]').html('<option value="">---- None ----</option>');
        $this_row.find('[name="price[]"],[name="price"]').val('0');
        if ($(this).val() != '') {
            $.ajax({
                url: "{{ route('inventory.supplier.getProduct') }}",
                type: "post",
                data: {
                    id: bss_number($(this).val()),
                },
                success: function (rs) {
                    if (rs.success) {
                        $this_row.find('[name="product_id[]"],[name="product_id"]').html(rs.options).prop('disabled', false);
                    }
                },
                error: function (rs) {
                    flashMsg("danger", 'Error', rs.message)
                },
            })
        }
        calculateBaseQtyAndTotal($this_row);
    });

    $(document).on('change', '[name="product_id[]"],[name="product_id"]', function () {
        const $this_row = $(this).closest('table.table-stock-out-item');
        $this_row.find('[name="unit_id[]"],[name="unit_id"]').html('<option value="">---- None ----</option>').prop('disabled', true);
        const $this = $(this);
        if ($(this).val() != '') {
            $.ajax({
                url: "{{ route('inventory.product.getUnit') }}",
                type: "post",
                data: {
                    id: bss_number($(this).val()),
                },
                success: function (rs) {
                    if (rs.success) {
                        $this_row.find('[name="unit_id[]"],[name="unit_id"]').html(rs.options).prop('disabled', false);
                        $this_row.find('[name="price[]"],[name="price"]').val(bss_number($this.find('option:selected').data('price')));
                    }
                },
                error: function (rs) {
                    flashMsg("danger", 'Error', rs.message)
                },
            })
        }
        calculateBaseQtyAndTotal($this_row);
    });

    $(document).on('change', '[name="unit_id[]"],[name="unit_id"]', function () {
        const $this_row = $(this).closest('table.table-stock-out-item');
        calculateBaseQtyAndTotal($this_row);
        if ($(this).val() != '') {
            $this_row.find('[name="price[]"],[name="price"]').val(bss_number($(this).find('option:selected').data('price')));
        }
    });

    $(document).on('keyup', '[name="qty[]"],[name="qty"]', function () {
        const $this_row = $(this).closest('table.table-stock-out-item');
        calculateBaseQtyAndTotal($this_row);
    });

    $(document).on('keyup', '[name="price[]"],[name="price"]', function () {
        const $this_row = $(this).closest('table.table-stock-out-item');
        calculateBaseQtyAndTotal($this_row);
    });

    dragula([document.getElementById("form-item-container")], {
        moves: function (e, o, t) {
            return t.classList.contains("cursor-move");
        },
    });
</script>