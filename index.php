<?php
// Silence is golden.

<div>
<h3>Your Cool Border Box</h3>
//on every keystroke, update content
<input type="text" value={props.attributes.content} onChange={updateContent}/>
// Create Reusable components just like they are HTML
<wp.components.ColorPicker color={props.attributes.color} onChangeComplete={updateColor}/>
</div>