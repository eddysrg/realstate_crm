<div class="w-10/12 bg-white p-5 rounded-lg flex gap-5">
    <div class="flex flex-col gap-2 grow">
        <label class="text-sm text-orange-500" for="ubication">Search by Location</label>
        <input class="h-full py-2 focus:outline-none" type="text" id="ubication" placeholder="Set Location E.g. CDMX">
    </div>

    <div class="flex flex-col gap-2 grow">
        <label class="text-sm text-orange-500" for="type">Type</label>
        <select class="h-full py-2" name="type" id="type">
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
            <option value="Office">Office</option>
            <option value="local">Local</option>
            <option value="land">Land</option>
        </select>
    </div>

    <div class="grow-[.5] ">
        <input class="bg-orange-600 w-full h-full text-white rounded cursor-pointer font-medium" type="submit"
            value="Search">
    </div>
</div>