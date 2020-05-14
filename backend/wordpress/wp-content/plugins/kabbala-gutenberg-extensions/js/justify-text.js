wp.blocks.registerBlockType('brad/justify-text', {
    title: 'Justify Text',
    icon: 'justify',
    category: 'common',
    keywords: ['text', 'ширину',],
    attributes: {
        content: {type: 'string'},
    },

    edit: function (props) {
        function updateContent(event) {
            props.setAttributes({content: event.target.value})
        }

        return React.createElement(
            "p",
            {
                style:
                    {
                        textAlign: 'justify',
                    },
                value: props.attributes.content,
                onChange: updateContent
            },
            null,
        );
    },
    save: function (props) {
        return wp.element.createElement(
            "p",
            {className: "has-text-align-justify"},
            props.attributes.content
        );
    }
});