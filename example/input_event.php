<input placeholder="Enter some text" id="id" name="name"/>
<p id="values"></p>

<script>
    const input = document.getElementById('id');
    const log = document.getElementById('values');

    input.addEventListener('input', updateValue);

    function updateValue(e) {
        log.textContent = e.target.value;
    }
</script>