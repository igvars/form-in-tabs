"use strict";

function FormEO(_formSelector) {
    var self = this;
    this.formSelector = _formSelector;
    this.values = {};

    this.locale = "en-us";
    this.arrayTab1 = {
        "actedenaissance_country_birth":"Pays de naissance",
        "actedenaissance_town_birth":"Ville de naissance",
        "actedenaissance_postcode_birth":"Code postal",
        "actedenaissance_father_name":"Nom du père",
        "actedenaissance_father_surname":"Prénom(s) du père",
        "actedenaissance_mother_name":"Nom de jeune fille de la mère",
        "actedenaissance_mother_surname":"Prénom(s) de la mère"
    };
    this.arrayTab2 = {
        "actedenaissance_type":"Type d'acte demandé",
        "actedenaissance_use":"Usage",
        "actedenaissance_quantity":"Nombre d'exemplaires"
    };
    this.htmlListForTab1 = "";
    this.htmlListForTab2 = "";

    this.getValues = function () {
        $.each(self.formSelector.serializeArray(), function(i, field) {
            self.values[field.name] = field.value;
        });
    };
    this.fetchValues = function (selector) {
        self.getValues();
        var tabIndex = selector.data("tab-index");
        if(tabIndex == 1) {
            self.generateTab1(tabIndex);
        } else if(tabIndex == 2) {
            self.generateTab2(tabIndex);
        }
        return false;
    };
    this.applyValues = function (selector) {
        self.fetchValues(selector);
        var tabIndex = selector.data("tab-index");
        var destination = "#tab"+(tabIndex+1) + " .right-column";

        self.changeStep(tabIndex, "next");
        selector.closest(self.formSelector).find(destination).find(".entered-params-block-1").html(self.htmlListForTab1);
        selector.closest(self.formSelector).find(destination).find(".entered-params-block-2").html(self.htmlListForTab2);
    };
    this.revertList = function (selector) {
        var tabIndex = selector.data("tab-index");
        if(tabIndex == 2) {
            self.htmlListForTab1 = "";
            self.htmlListForTab2 = "";
        } else if(tabIndex == 3) {
            self.htmlListForTab2 = "";
        }
        self.changeStep(tabIndex, "prev");
    };
    this.generateTab1 = function (tabIndex) {
        var listStringHtml = "";
        var listWithoutKey = "";
        var fullName = "";
        var birthDate = "";
        fullName += self.values["actedenaissance_gender"] + " " + self.values["actedenaissance_surname"] + " " + self.values["actedenaissance_name"];
        listWithoutKey += self.applyTemplate(fullName);

        var year = self.values["actedenaissance_birth_year"];
        var month = self.values["actedenaissance_birth_month"]-1;
        var day = self.values["actedenaissance_birth_day"];
        
        var date = new Date(year, month, day),
            locale = self.locale,
            monthName = date.toLocaleString(locale, { month: "long" });
        birthDate +=  date.getDate() + " " + monthName + " " + date.getFullYear();
        listStringHtml += self.applyTemplateWithLabel("Date de naissance", birthDate);

        listStringHtml += self.getOtherValues(tabIndex);

        self.htmlListForTab1 = listWithoutKey + listStringHtml;
    };
    this.generateTab2 = function (tabIndex) {
        var listStringHtml = "";

        listStringHtml += self.getOtherValues(tabIndex);

        self.htmlListForTab2 = listStringHtml;
    };
    this.applyTemplate = function (value) {
        return "<li><span class='value'>" + value + "</span></li>"
    };
    this.applyTemplateWithLabel = function (label, value) {
        return "<li><span class='key'>" + label + " : </span><span class='value'>" + value + "</span></li>";
    };
    this.getValueLabel = function (inputName, tabIndex) {
        if(tabIndex == 1) {
            return self.arrayTab1[inputName] ? self.arrayTab1[inputName] : false;
        } else if (tabIndex == 2) {
            return self.arrayTab2[inputName] ? self.arrayTab2[inputName] : false;
        }
        return false;
    };
    this.getOtherValues = function (tabIndex) {
        var listStringHtml = "";

        for(var key in self.values ) {
            var label = self.getValueLabel(key, tabIndex);
            if(label) {
                listStringHtml += self.applyTemplateWithLabel(label, self.values[key]);
            }
        }

        return listStringHtml;
    };
    this.validate = function (selector) {
        var tabIndex = selector.data("tab-index");
        $(self.formSelector).validator('validate');
        if($(self.formSelector).find(" #tab" + tabIndex + " .has-error").length == 0) {
            self.revertValidation();
            return true;
        } else {
            return false;
        }
    };
    this.revertValidation = function () {
        var arr = $(self.formSelector).find(".has-error.has-danger");
        arr.removeClass("has-error", "has-danger");
    };
    this.changeStep = function (index, way) {
        if(way == "next") {
            $(".steps :nth-child(" + index + ")").removeClass("active");
            $(".steps :nth-child(" + (index + 1) + ")").addClass("active");
        } else if(way == "prev") {
            $(".steps :nth-child(" + index + ")").removeClass("active");
            $(".steps :nth-child(" + (index - 1) + ")").addClass("active");
        }
    };
}
(function($){

    $(".tooltip-container").tooltip({
        html: true
    });

    var form = new FormEO($("#eo-form"));
    $('.submit-button > a[data-toggle="tab"]').on('show.bs.tab', function () {
        if( form.validate($(this)) == false ) {
            return false;
        }
        form.applyValues($(this));
    });
    $(document).on("click", ".block-revert > a", function () {
        form.revertList($(this));
    });
    $(document).on("click", ".step .step-name", function () {
        var currentTabIndex = $(".step.active .step-name").data("tab-index");
        var queryTabIndex = $(this).data("tab-index");
        if (currentTabIndex == queryTabIndex) {
            return false;
        }
        if(currentTabIndex < queryTabIndex) {
            $(".tab-pane.active .form-footer .submit-button > a").click();
        } else {
            $(".tab-pane.active .block-revert > a").click();
        }
    });
}($ || jQuery));