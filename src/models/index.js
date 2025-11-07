import sequelize from '../config/database.config.js';
import initUserModel from './user.model.js';
import initAccountModel from './account.model.js';
import initRoleModel from './role.model.js';
import initAccountRoleModel from './accountRole.model.js';

const db = {};

db.sequelize = sequelize;

// Khởi tạo các model và truyền vào instance của sequelize
db.User = initUserModel(sequelize);
db.Account = initAccountModel(sequelize);
db.Role = initRoleModel(sequelize);
db.AccountRole = initAccountRoleModel(sequelize);
db.Article = initArticleModel(sequelize); //
db.ToursSchedule = initToursScheduleModel(sequelize);//
db.ToursExclusions = initToursExclusionsModel(sequelize);//
db.ToursInclusions = initToursInclusionsModel(sequelize);//
db.Booking = initBookingModel(sequelize);//
db.Tags = initTagsModel(sequelize);//
db.Tour = initTourModel(sequelize);//
db.Location = initLocationModel(sequelize);//
db.TourTags = initTourTagsModel(sequelize);//
db.TourHighlight = initTourHighlightModel(sequelize);//
db.LocationGallery = initLocationGalleryModel(sequelize);//
db.Category = initCategoryModel(sequelize);//
db.Reviews = initReviewsModel(sequelize);//


// Thiết lập các mối quan hệ (associations) tại đây
const { User, Account, Role, AccountRole } = db;

// Một User có một Account
User.hasOne(Account, { foreignKey: 'userId', as: 'account' });
Account.belongsTo(User, { foreignKey: 'userId', as: 'user' });

// Quan hệ nhiều-nhiều giữa Account và Role thông qua bảng AccountRole
Account.belongsToMany(Role, {
    through: AccountRole,
    foreignKey: 'accountId',
    as: 'roles'
});
Role.belongsToMany(Account, {
    through: AccountRole,
    foreignKey: 'roleId',
    as: 'accounts'
});

// Thêm các mối quan hệ khác nếu cần thiết
Booking.belongsTo(User, { foreignKey: 'userID', as: 'user' });
User.hasMany(Booking, { foreignKey: 'userID', as: 'bookings' });
Booking.belongsTo(ToursSchedule, { foreignKey: 'tourScheduleId', as: 'tourSchedule' });
ToursSchedule.hasMany(Booking, { foreignKey: 'tourScheduleId', as: 'bookings' });


export default db;