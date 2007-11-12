/**
 * CodeX: Breaking Down the Barriers to Source Code Sharing
 *
 * Copyright (c) Xerox Corporation, CodeX, 2007. All Rights Reserved
 *
 * This file is licensed under the CodeX Component Software License
 *
 * @author Anne Hardyau
 * @author Marc Nazarian
 */

package com.xerox.xrce.codex.jri.model;

import java.util.ArrayList;
import java.util.List;

import com.xerox.xrce.codex.jri.model.wsproxy.ArtifactField;
import com.xerox.xrce.codex.jri.model.wsproxy.ArtifactFieldValueList;

/**
 * CxArtifactField is the class for artifact fields (structure)
 * 
 */
public class CxArtifactField extends CxFromServer {

    /**
     * The fieldset this field belongs to
     */
    private CxArtifactFieldSet artifactFieldSet;

    /**
     * The ArtifactField Object
     */
    private ArtifactField artifactField;

    /**
     * Constructor from ArtifactField Object (generated by WSDL2JAVA)
     * 
     * @param server the server this field belongs to
     * @param artifactField the ArtifactField Object
     */
    public CxArtifactField(CxServer server, ArtifactField artifactField) {
        super(server);
        this.artifactField = artifactField;
    }

    /**
     * Returns the ID of this field
     * 
     * @return the ID of this field
     */
    public int getID() {
        return artifactField.getField_id();
    }

    /**
     * Returns the name (short_name) of this field
     * 
     * @return the name (short name) of this field
     */
    public String getName() {
        return artifactField.getField_name();
    }

    /**
     * Returns the label of this field
     * 
     * @return the label of this field
     */
    public String getLabel() {
        return artifactField.getLabel();
    }

    /**
     * Returns the description of this field
     * 
     * @return the description of this field
     */
    public String getDescription() {
        return artifactField.getDescription();
    }

    /**
     * Returns if this field is a standard one or not
     * 
     * @return true if this field is a standard one, false otherwise
     */
    public boolean isStandard() {
        return artifactField.isIs_standard_field();
    }

    /**
     * Returns if this field is special or not. Special fields are fields that
     * have a special behaviour.
     * 
     * @return true is this field is a special one, false otherwise
     */
    public boolean isSpecial() {
        return artifactField.getSpecial() == 1;
    }

    /**
     * Returns if this field is required or not.
     * 
     * @return true if this field is required, false otherwise
     */
    public boolean isRequired() {
        return (artifactField.getEmpty_ok() != 1);
    }

    /**
     * Returns if the user can update this field or not
     * 
     * @return true if this field can be updated by the user, false otherwise
     */
    public boolean userCanUpdate() {
        return artifactField.isUser_can_update();
    }

    /**
     * Returns if the user can submit this field or not
     * 
     * @return true if this field can be submitted by the user, false otherwise
     */
    public boolean userCanSubmit() {
        return artifactField.isUser_can_submit();
    }

    /**
     * Returns the display size (code, see the CodeX user guide for details) of
     * this field
     * 
     * @return the display size of this field
     */
    public String getDisplaySize() {
        return artifactField.getDisplay_size();
    }

    /**
     * Returns the display type of this field. Display types are:
     * <ul>
     * <li>SB for Single Boxes</li>
     * <li>MB for Multi Boxes</li>
     * <li>TF for Text Fields</li>
     * <li>DF for Date Fields</li>
     * <li>TA for Text Area</li>
     * </ul>
     * 
     * @return the display type of this field
     */
    public String getDisplayType() {
        return artifactField.getDisplay_type();
    }

    /**
     * Returns the data type of this field. Data types are:
     * <ul>
     * <li>1 text</li>
     * <li>2 int</li>
     * <li>3 float</li>
     * <li>4 date</li>
     * <li>5 user</li>
     * </ul>
     * 
     * @return the data type of this field
     */
    public int getDataType() {
        return artifactField.getData_type();
    }

    /**
     * Returns the default value for this field
     * 
     * @return the default value for this field
     */
    public String getDefaultValue() {
        return artifactField.getDefault_value();
    }

    /**
     * Returns the values available for this field
     * 
     * @return the values available for this field
     */
    public List<CxArtifactFieldValueList> getAvailableValues() {
        ArtifactFieldValueList[] artFieldValueListArray = artifactField.getAvailable_values();
        List<CxArtifactFieldValueList> artFieldValueLists = new ArrayList<CxArtifactFieldValueList>();
        for (ArtifactFieldValueList artFieldValueList : artFieldValueListArray) {
            artFieldValueLists.add(new CxArtifactFieldValueList(this.getServer(), artFieldValueList));
        }
        return artFieldValueLists;
    }

    /**
     * Returns the fieldset this field belongs to
     * 
     * @return the fieldset this field belongs to
     */
    public CxArtifactFieldSet getArtifactFieldSet() {
        return artifactFieldSet;
    }

    /**
     * Sets the fieldset of this field
     * 
     * @param artifactFieldSet the fieldset this field belongs to
     */
    public void setArtifactFieldSet(CxArtifactFieldSet artifactFieldSet) {
        this.artifactFieldSet = artifactFieldSet;
    }

}