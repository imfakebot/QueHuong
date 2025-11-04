import { DataTypes } from "sequelize";
import sequelize from "../config/database.config.js";

const ToursInclusions = sequelize.define('ToursInclusions', {
    tourInclusionID: {
        type: DataTypes.UUID,
        defaultValue: DataTypes.UUIDV4,
        primaryKey: true,
    },
    tourID: {
        type: DataTypes.UUID,
        allowNull: false,
    },
    item: {
        type: DataTypes.STRING,
        allowNull: false,
    },
    displayOrder:{
        type: DataTypes.INTEGER,
        allowNull: false,
        unsigned: true,
        defaultValue: 0,
    }
}, {
    tablename: 'ToursInclusions'
});

export default ToursInclusions;
