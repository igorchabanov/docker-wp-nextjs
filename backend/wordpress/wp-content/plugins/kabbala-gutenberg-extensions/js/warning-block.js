wp.blocks.registerBlockType('brad/warning-box', {
    title: 'Warning Box',
    icon: 'warning',
    category: 'common',
    keywords: [ 'warning', 'уведомление', 'блок', 'предупреждение' ],
    attributes: {
        content: {type: 'string'},
    },

    edit: function(props) {
        function updateContent(event) {
            props.setAttributes({content: event.target.value})
        }
        return React.createElement(
            "div",
            { style:
                {
                    background: "linear-gradient(62.01deg, #9AD7EE 0%, #D195DC 92.86%)",
                    borderRadius: "5px",
                    padding: "15px 10px",
                    margin: "0 10px 10px 0",
                }
            },
            null,
            React.createElement(
                "h5",
                {style: {color: "#ffffff"}},
                null,
                "Warning Box"
            ),
            React.createElement("textarea", { style: {width: "100%"}, value: props.attributes.content, onChange: updateContent }),
        );
    },
    save: function(props) {
        return wp.element.createElement(
            "div",
            { className: "warning-box"},
                wp.element.createElement(
                    "img",
                    {src: "http://kabbala.one-pix.com/wp-content/themes/kabbala/img/warning-box-icon.svg"},
                    null,
                ),
                wp.element.createElement(
                    "p",
                    null,
                    props.attributes.content
                ),
        );
    }
});