// Tutorial from https://www.youtube.com/watch?v=Mv68Sa-iHyo&t=358s

// this function can be found here: https://www.youtube.com/watch?v=Mv68Sa-iHyo&t=358s

wp.blocks.registerBlockType('luke-block-exercise/border-box', {
  title: 'Lukes Border Box',
  icon: 'smiley',
  category: 'common',
  attributes: {
    content: {
      type: 'string',
    },
    color: {
      type: 'string',
    },
  },
  /*eslint-disable */
  // This controls the appearance on the backend
  edit: function(props) {
    //   Run this function every time there is a change (keystroke)
    function updateContent(event) {
      props.setAttributes({ content: event.target.value });
    }

    // Run this function every time a color is picked.
    function updateColor(value) {
      props.setAttributes({ color: value.hex });
    }
    // Below uses .jsx syntax. Can be found on babaljs.io
    return React.createElement(
      "div",
      null,
      React.createElement("h3", null, "Your Cool Border Box"),
      "//on every keystroke, update content",
      React.createElement("input", {
        type: "text",
        value: props.attributes.content,
        onChange: updateContent
      }),
      "// Create Reusable components just like they are HTML",
      React.createElement(wp.components.ColorPicker, {
        color: props.attributes.color,
        onChangeComplete: updateColor
      })
    );
  }, // controls the interface user seees in WP editing screen
  save: function(props) {
    return null;
  } // controls HTML output user sees when saving
});

/* eslint-enable */
