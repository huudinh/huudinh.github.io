// https://tuandc.com/lap-trinh/huong-dan-tao-from-gui-du-lieu-tu-website-len-google-sheet-khong-dung-google-forms.html
// https://docs.google.com/spreadsheets/d/1RvQZ1D23bvYvgAmyaLd_wHm0uPP-W0ZwRH3cTi_IbUQ/edit?usp=sharing
function doGet(e) {
    return handleResponse(e);
}

var SHEET_NAME = "Sheet1";

var SCRIPT_PROP = PropertiesService.getScriptProperties();

function handleResponse(e) {
    var lock = LockService.getPublicLock();
    lock.waitLock(30000);

    try {
        var doc = SpreadsheetApp.openById(SCRIPT_PROP.getProperty("key"));
        var sheet = doc.getSheetByName(SHEET_NAME);

        var headers = sheet.getRange(1, 1, 1, sheet.getLastColumn()).getValues()[0];
        var nextRow = sheet.getLastRow() + 1;
        var row = [];

        for (i in headers) {
            row.push(e.parameter[headers[i]]);
        }

        sheet.getRange(nextRow, 1, 1, row.length).setValues([row]);

        return ContentService
            .createTextOutput(JSON.stringify({"result": "success", "row": nextRow}))
            .setMimeType(ContentService.MimeType.JSON);
    } catch (e) {
        return ContentService
            .createTextOutput(JSON.stringify({"result": "error", "error": e}))
            .setMimeType(ContentService.MimeType.JSON);
    } finally {
        lock.releaseLock();
    }
}

function setup() {
    var doc = SpreadsheetApp.getActiveSpreadsheet();
    SCRIPT_PROP.setProperty("key", doc.getId());
}